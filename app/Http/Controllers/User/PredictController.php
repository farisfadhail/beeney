<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PredictController extends Controller
{
    public function index()
    {
        return view('user.predicts.index');
    }

    public function prediction_stock(Request $request)
    {
        // Mendapatkan input persediaan dan permintaan dari request
        $inventory = $request->input('inventory');
        $demand = $request->input('demand');

        // Mendefinisikan fungsi keanggotaan untuk variabel input (persediaan dan permintaan)
        function inventory_membership($inventory)
        {
            if ($inventory >= 10) {
                return 1;
            } elseif ($inventory > 2 && $inventory < 10) {
                return (10 - $inventory) / (10 - 2);
            } else {
                return 0;
            }
        }

        function demand_membership($demand)
        {
            if ($demand >= 5) {
                return 1;
            } elseif ($demand > 2 && $demand < 5) {
                return ($demand - 2) / (5 - 2);
            } else {
                return 0;
            }
        }

        // Mendefinisikan fungsi untuk menghitung nilai produksi berdasarkan aturan fuzzy Tsukamoto
        function compute_production($inventory, $demand)
        {
            // Menghitung nilai keanggotaan untuk setiap aturan
            $rule_memberships = [
                min(inventory_membership($inventory), demand_membership($demand)),
                min(inventory_membership($inventory), 1 - demand_membership($demand)),
                min(1 - inventory_membership($inventory), demand_membership($demand)),
                min(1 - inventory_membership($inventory), 1 - demand_membership($demand))
            ];

            // Menggunakan metode weighted average untuk menghitung nilai produksi
            $numer = (
                ($rule_memberships[0] * 4) +
                ($rule_memberships[1] * 4) +
                ($rule_memberships[2] * 2) +
                ($rule_memberships[3] * 2)
            );

            $denom = array_sum($rule_memberships);

            return $numer / $denom;
        }

        // Hitung nilai prediksi produksi berdasarkan aturan fuzzy Tsukamoto
        $prediction = compute_production($inventory, $demand);

        // Tentukan range nilai untuk kategori "Tinggi", "Sedang", dan "Rendah"
        $high_range = 4;
        $low_range = 2;

        // Tentukan kategori berdasarkan nilai prediksi produksi
        if ($prediction > $high_range) {
            $category = "Tinggi";
        } elseif ($prediction < $low_range) {
            $category = "Rendah";
        } else {
            $category = "Sedang";
            $description = "Berdasarkan prediksi, produksi madu diperkirakan akan sedang.";
        }

        return redirect()->route('user.predict.show', compact('prediction', 'category', 'inventory', 'demand'));
    }

    public function show(Request $request)
    {
        $prediction = $request->query('prediction');
        $category = $request->query('category');
        $inventory = $request->query('inventory');
        $demand = $request->query('demand');

        return view('user.predicts.show', compact('prediction', 'category', 'inventory', 'demand'));
    }
}
