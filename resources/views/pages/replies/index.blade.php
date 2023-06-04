@extends('layouts.frontend')

@section('content')
    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Questions -->
    <div class="card w-full bg-orange-50 shadow-md hover:shadow-xl transition-shadow my-8 py-2">
        <div class="card-body">
            <div class="flex justify-between gap-8">
                <h1 class="card-title text-base">Apakah perubahan iklim berpengaruh terhadap produksi madu lebah madu hutan? Jika berpengaruh, apa solusi yang sebaiknya dilakukan?</h1>
                <label class="swap">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" />

                    <!-- volume on icon -->
                    <img src="https://img.icons8.com/material/96/C57C00/bookmark-outline.png" class="w-8 mx-4 swap-on" />

                    <!-- volume off icon -->
                    <img src="https://img.icons8.com/material/96/C57C00/bookmark-ribbon--v1.png" class="w-8 mx-4 swap-off" />
                </label>
            </div>
            <div class="flex pr-12 py-4 text-sm">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pulvinar tortor ultricies arcu molestie iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec tellus
                    diam. Duis sit amet finibus ipsum, sit amet pretium dui. Mauris quam ipsum, feugiat faucibus accumsan quis, eleifend vel nulla. Nunc cursus dolor sit amet neque elementum placerat. Morbi erat ipsum, rutrum sit amet urna a,
                    accumsan ullamcorper leo. Pellentesque non mauris quis eros interdum ultricies luctus nec erat. Phasellus libero augue, varius sit amet mauris fringilla, congue mattis lectus. Nullam consectetur et orci et viverra. Etiam
                    gravida tellus dui, in pretium odio facilisis sed. Praesent faucibus laoreet neque, id malesuada nisi ultrices sed. Vivamus ut massa quis augue mattis maximus. Suspendisse ac dolor vitae enim tincidunt faucibus iaculis et
                    lorem. Fusce elit sem, tincidunt ac dui a, facilisis accumsan risus. Nulla ullamcorper velit vel scelerisque gravida. Vestibulum eget tincidunt ligula. Etiam mollis auctor eros, at maximus massa congue ut. Vivamus bibendum
                    sollicitudin dolor, at porta orci. Aliquam rutrum, massa id volutpat facilisis, nibh ante interdum velit, non suscipit odio tellus et lacus. Proin maximus ultrices lacinia. Donec non lorem eget est tincidunt efficitur et
                    vitae odio. Maecenas purus nulla, tempor in ullamcorper at, elementum id enim. Phasellus felis est, fringilla in interdum eget, porttitor eget velit. Quisque vitae sodales libero. Vestibulum tincidunt libero porta, dictum
                    leo nec, viverra nisl. Maecenas et nunc ac urna dignissim placerat sit amet aliquam leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eleifend tortor nec ante iaculis,
                    volutpat luctus nunc congue.
                </p>
            </div>
            <div class="flex gap-2">
                <div class="badge badge-outline">Apis Dorsata</div>
                <div class="badge badge-outline">Pemula</div>
            </div>
            <div class="card-actions justify-end">
                <div class="flex">
                    <img src="https://img.icons8.com/material-outlined/24/null/visible--v1.png" width="50%" />
                    <div class="text-sm ml-2 min-w-full">12</div>
                </div>
                <div class="flex ml-4">
                    <img src="https://img.icons8.com/ios-glyphs/30/null/speech-bubble--v1.png" width="40%" />
                    <div class="text-sm ml-2 min-w-full">5</div>
                </div>
                <div class="flex ml-2">
                    <img src="https://img.icons8.com/material-outlined/24/null/create.png" width="20%" />
                    <div class="text-sm ml-2 min-w-full">12 April 2023</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-700 h-[1px] mt-6"></div>

    <div class="mt-4">
        <div class="flex flex-row justify-end">
            <div class="mt-2">Urut berdasarkan :</div>
            <select class="select select-warning max-w-xs ml-2 cursor-pointer p-2">
                <option disabled selected>Filter Komentar</option>
                <option>Paling membantu</option>
                <option>Terbaru</option>
                <option>Terlama</option>
            </select>
        </div>
    </div>

    <div class="mt-6">
        <div class="flex gap-4">
            <div class="gap-2 p-4">
                <img src="../../images/healthicons_ui-user-profile.png" alt="" class="w-12" />
                <div class="text-xs font-medium mt-2">Udin Hiddleston</div>
            </div>
            <div class="mt-2">
                <div class="font-semibold text-sm py-2">14 April 2023 Pukul 14.30</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae nulla eget elit suscipit scelerisque. Mauris sed condimentum risus, vitae iaculis nunc. Sed tincidunt dui eu dui cursus blandit. Integer venenatis quis mi
                    et molestie. Suspendisse magna mi, ultricies eu viverra nec, pellentesque in risus. Fusce tincidunt tempor lacus id vehicula. Quisque aliquam risus eu sapien egestas rhoncus.
                </p>
                <label class="swap">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" />

                    <!-- volume on icon -->
                    <img src="https://img.icons8.com/ios-filled/50/null/thumb-up--v1.png" class="w-5 swap-on mt-4" />

                    <!-- volume off icon -->
                    <img src="https://img.icons8.com/ios/50/null/thumb-up--v1.png" class="w-5 swap-off mt-4" />
                </label>
                <label class="swap">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" />

                    <!-- volume on icon -->
                    <img src="https://img.icons8.com/ios-filled/50/null/thumbs-down.png" class="w-5 ml-4 swap-on mt-4" />

                    <!-- volume off icon -->
                    <img src="https://img.icons8.com/ios/50/null/thumbs-down.png" class="w-5 ml-4 swap-off mt-4" />
                </label>
            </div>
        </div>
        <div class="bg-green-700 h-[2px] mt-4"></div>
    </div>
    <div class="mt-6">
        <div class="flex gap-4">
            <div class="gap-2 p-4">
                <img src="../../images/healthicons_ui-user-profile.png" alt="" class="w-12" />
                <div class="text-xs font-medium mt-2">Udin Hiddleston</div>
            </div>
            <div class="mt-2">
                <div class="font-semibold text-sm py-2">14 April 2023 Pukul 14.30</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae nulla eget elit suscipit scelerisque. Mauris sed condimentum risus, vitae iaculis nunc. Sed tincidunt dui eu dui cursus blandit. Integer venenatis quis mi
                    et molestie. Suspendisse magna mi, ultricies eu viverra nec, pellentesque in risus. Fusce tincidunt tempor lacus id vehicula. Quisque aliquam risus eu sapien egestas rhoncus.
                </p>
                <label class="swap">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" />

                    <!-- volume on icon -->
                    <img src="https://img.icons8.com/ios-filled/50/null/thumb-up--v1.png" class="w-5 swap-on mt-4" />

                    <!-- volume off icon -->
                    <img src="https://img.icons8.com/ios/50/null/thumb-up--v1.png" class="w-5 swap-off mt-4" />
                </label>
                <label class="swap">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" />

                    <!-- volume on icon -->
                    <img src="https://img.icons8.com/ios-filled/50/null/thumbs-down.png" class="w-5 ml-4 swap-on mt-4" />

                    <!-- volume off icon -->
                    <img src="https://img.icons8.com/ios/50/null/thumbs-down.png" class="w-5 ml-4 swap-off mt-4" />
                </label>
            </div>
        </div>
        <div class="bg-green-700 h-[2px] mt-4"></div>
    </div>

    <div class="flex justify-center py-8">
        <div class="btn-group">
            <button class="btn btn-ghost">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button class="btn btn-ghost">1</button>
            <button class="btn">2</button>
            <button class="btn btn-ghost">3</button>
            <button class="btn btn-ghost">4</button>
            <button class="btn btn-ghost">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
@endsection
