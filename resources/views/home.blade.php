@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="mb-12">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h2 class="text-4xl font-bold mb-4">Services One Click away</h2>
                <p class="text-gray-600 mb-6">Services you are looking for?</p>
                <div class="grid grid-cols-3 gap-4 max-w-md">
                    <div class="text-center">
                        <img alt="Electrician service" class="w-full h-24 object-cover rounded-lg shadow-md mb-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNsCB5O6wui2AyDEC8VJbau7PJjDv6rZjWrO0Wk5Cq2eVtE-HIFJjMy0OM2tZoJ5sNlV-WwL6MBAPAqDuU5qwnopgcs15wvi305toluCC4HPnWUAMMsHgjtk6brTiWaq0C2kHQ5Awm3gz4iCqA_aPYZi_gvM0fas08ftlIZ41DGQQUC6MJxwoPKn3644umJpbCrAYsKBoc9NoiNau40cu-Nv4WJgfyW383Jky9Gu65F42bPfZZIcqqdsiJKZmCO1Y34g2vDIrdVXw" />
                        <span class="text-sm text-gray-700">Electrician</span>
                    </div>
                    <div class="text-center">
                        <img alt="Washing machine repair service" class="w-full h-24 object-cover rounded-lg shadow-md mb-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBK91ztG7AiZlxO0IsMT35trSGgosuP2YhIbkfVQvgVmmWPrj-V_Jg1w07nU3gS6uKuUQNaK0layuA_bw0LWLhcVvhx9N3UsraPdX1ZMxceUcBHQTx3RWfi-Ntu58UoEWZmxjRDh8kBpwFIDFdW57SZDNdJhGNd5Lm9b_0w4bBWJNMekRzEnZdjANJqmCwZtDdu3C8qTarq7kstA-elRlrr5mYu3WZLPjZFMMRFh5LJlWVhXoVACfDWX_qTLIhuSBSh0UtGiN7BJ3s" />
                        <span class="text-sm text-gray-700">Washing Machine</span>
                    </div>
                    <div class="text-center">
                        <img alt="AC repair service" class="w-full h-24 object-cover rounded-lg shadow-md mb-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoBmTXDxRK7q6jthKE9i5slCUXME-HEY8Pi_-w9-24mU-SBxuhqQuL4fup7sC9oe56KPA_5H8s2AnAePfGOiw2u3t-SECFvo3H74mh-uZB9eCrHwspjAVUqNb-8lCKkpuXW0hBCGXrCOvuxJg6MXAW-t85_4_XJ1eL2P6I9__qY6P3W_tSp0vyWR_eMuqTdNZz9f8_zGVi9vc6I30Xa8iYd-Y5ri4qlaN2VrW39jsjoXyMYB6jkMWyfaE9VwAqeTvX8iuT0A12Nog" />
                        <span class="text-sm text-gray-700">AC</span>
                    </div>
                    <div class="text-center">
                        <img alt="RO Purifier service" class="w-full h-24 object-cover rounded-lg shadow-md mb-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0I3RdEdhTsR3hoM-a9GZDrvakoQwoXOOKFsx4VpHd4Xa-is6bmaZjA041TnooFr0O6wowZ5F8-rPrgHRZIm6zXQg1rvNNYzKC1xSVV1lrCOALy7CdhWbIh8L68bIvyj1F9T0xK4Ylt-ue08m0ga2YbzrWLHzr5e9j9hXYMr_ZRvx5rVs5dWQ6dFXn0pz6KYBLP5JwBbQCV_uZUNXLYzux60IN-67h16MybBXkBKZKc1U6UD6SEsFHoXzueCm-zDD1X6ZcOmLrFgI" />
                        <span class="text-sm text-gray-700">RO Purifier</span>
                    </div>
                    <div class="text-center">
                        <img alt="CCTV installation service" class="w-full h-24 object-cover rounded-lg shadow-md mb-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnZVTGK_Uub6oh0-w4aARAhNbuFluy1UQQLEkslN3838sgILv5KVD8EGM1Xmiy6pgTeHlFRK3YFv1iNbDls_NCgCJemwiROc11IRtUKZwgzib99oigJl5wqTnsfRekUMwo9p433DarqyJedMkPPikCZ9E6ZpQoW9d1TCcZ4JvfLU023R3G6KHMhEPVU0VpuGNX27shEpky812oZEl6dTYkqFxFVoQ5TL_8FWatRT_h7V3OoupXawjZbF4ITXB5Ob-qTKZiN5mFmsk" />
                        <span class="text-sm text-gray-700">CCTV</span>
                    </div>
                    <div class="text-center">
                        <img alt="Plumber service" class="w-full h-24 object-cover rounded-lg shadow-md mb-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrIlTRAlCbFR9C6DRpLPjVhIUefAp70S52urUs6ZM9cAzgh402O-Y2PRsNgrRlGGtGddbWqHqkmRkkupuvctMA3wAEW3tUuMsNvc3Xq1Jw0JcNOb8PDs9daGFJYiw29D6c9IqokhLz_YmKC1oItDmY49_bJcih5MiFmJSfEwHdv6tq5LeJIaN6VRVtt_lU5XkqmMUPDdZl4v1gV27RW0NdD5urukv7FSMcquWfgCWBI-5O_GN6dXuVEONzxXFsLlMn4_5Pd1og2f0" />
                        <span class="text-sm text-gray-700">Plumber</span>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 grid grid-cols-2 gap-4">
                <img alt="Illustrated house with stars" class="w-full h-auto rounded-lg"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6_12BTfUvDefjQr8BLUnY8zAo3DC4CEQHb75nG1L7AdikaXAdut3xGToMlJbrH5R_4Psbepe62E_pSiWaJcMHj4dqza6y4y5Y3ycizPG28bIMA6TgRoyNTsRzeuMEqN4Trrp9b-UZkFcwOk9YkExHmgmNfiyyHKdwiqERSo74uzQ4BeRthQvUq-vSP_Ky0_cFdVY_VAD-OxsbLKgwQ_JslZZbhyzdQ_Nfp-eeXY0mu0Uu1lqEfISrKnDdvqCEeTer18FQMiriJxo" />
                <img alt="Illustrated simple house" class="w-full h-auto rounded-lg"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxWZqo__OuJPDhxSSYQMXf2fN3CthSWccIQGqv3JVDl_FD7BXVlyo5PxSqwL9tb9ywBI3GOiaeS7a-kRFBXFFTgPs2iu1ZLJ2Z7GXxURFXMupzzsv3jbOAhs0ILe1K-zu02OTorUcGVy71uOhDIVi2Ym36UUaq8LTKMb3MxfCTAdy3w27rx1mfUTMmwkNbE0NSNCJfw_x1ek41bw82Ltq389u8IqsPv09_JtwPlgxRZ2mVwDQzJpRSmuWvxqm8YC1SDBe_OHva9z4" />
                <img alt="Party hall decorated with balloons" class="w-full h-auto rounded-lg col-span-1"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGLCu15PvACg1bPvPr3Tp1ngTi8Ka6ZaHjlVmcv5pomVNbmXrVzIIBSqK8sGjMrQQbcd-IomwhUtIxZMBD69wSjwn2ux6Ebt4OaksV_GGREIAudBqXTVWacZyiqrVQLKUcjWQ0Eub8v5ecO9a6NWngbIunInb_E2G1Qz2Rie_gwXHe_iZIuAqYw2P3jSFHb6y7Ik6G8UoC-Szl_RSi4WdzelI2hEXdPLKp4BdjnPjOsIC7mtERh0hfoL-3TRfAjbeQaOFLwuWbRxc" />
                <img alt="Cup of coffee with text Best Coffee" class="w-full h-auto rounded-lg col-span-1"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiOxapUW7T6IBIbjJWo3nryQDoorSo_8YLlzQMPRqXFD6oWLmx1AfWna6HCD-zWhc0e5wqkCK-JCZes37VxjuynRcBigrnBjhZQt4UMCods9ZmaYadrg3SP8A5_Kt3iUb2VRjhQx9z78a9VoUVUVNyA-G9Qg31UPb5FFiTdO_UV8pWjSftEBHB4OblazJreU9eR96fCFmMGqurgYFulV2kTcy3khFbmUwlzjyPYrGgXK89DAPajKx_dhuo1BxEDUNorAuHKT6Ny1k" />
            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-12 rounded-lg my-12">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h2 class="text-4xl font-bold mb-4">Start Selling Your Services !!</h2>
                <p class="text-gray-600 mb-6">Become The Service Provider At {{ $settings->app_name }} And Start Earning
                    Online.
                </p>
                <button
                    class="bg-black text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-800 transition duration-300">Join
                    now</button>
            </div>
            <div class="md:w-1/2">
                <img alt="Group of diverse service providers" class="w-full h-auto rounded-lg"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBRFdc_Jzq9ZSV3o_9YjO5JgYDbxUx7taQTQ5pHSXyZHuH_MOQbnqse2WmDh0iOSxY5ozKrYqeNTDia1WXopt_9RWqlDP2zETa5VRQjq4yO-oMpX9LnEVvCtyxKc_YpZZIu52xh3NfszrTIwde3wolzAoG58Abc32zc3vxluxAuWM33mawF72h-sRS6Q1y5g7fko0GXv4MGPITtz4b2w2_hDnflg91X4aRlezCo-rmSRWXmx1bKn2afvsOC2HuhzBxrdJiHLl89LE" />
            </div>
        </div>
    </section>
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-semibold">Electrical Plumbing and Appliance Services</h3>
            <a class="text-blue-600 hover:underline" href="#">View All &gt;&gt;</a>
        </div>
        <div class="relative">
            <div class="flex overflow-x-auto space-x-6 pb-4 scrollbar-hide">
                <div class="flex-none w-64 text-center">
                    <img alt="Electrician working" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3x-o3nPuV-JAsyU0d_i7xl-ABKY03PEIA4BFditp2Rk4exJoJmU38_XSXZTdYWyyWbCvDXIO87y4l1-G3tW8uqzPhtcWkobrWcaACjfkS4zM8WboAzHPYYZNVLp3mUA0acckLgF2yKFuwqKrZ8nsjxgNSIc8GzbIMZjhMAK-dKuqkUmxNscucdBVx0rw9RHU3WUSLygenm_2yhf8bJlFT25ukQkFO1hXss_u5slFnrLgSJ1g8P0hxBFi_L-wFtwvfMncgHe1JASI" />
                    <span class="text-gray-700">Electrician</span>
                </div>
                <div class="flex-none w-64 text-center">
                    <img alt="Plumber working" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1dkxExiWQeZX7lEa_J8O4_SdAAznS7pARzUGpsay6CiX1J19xnjUm86QHfQFAoJtLZNvR6B0Fd9xa49bHzl2yxwPSynPQM8eIshCGz44SU3i2-F8m5tDRCpE5nYCspNNddszW9QSC4Av_uWSEkatCzNDqxEYI0D75KhqsvOHwxOa86fDs9VTdWKUzVK-Mx45TqOKXkMKyUgylutNPVyGQrA9XokxdBWVXGhRGQvuu1_aIbVxDSo5i3sTixQo5GiHNwnY3pLSW6gI" />
                    <span class="text-gray-700">Plumber</span>
                </div>
                <div class="flex-none w-64 text-center">
                    <img alt="WiFi router" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzPS7VkL_0mHzL7UyQ13w4pfiSpWJ3v9jdECbaubxtK3iS-7sUJV4VDjeOkHtCwigWByucRig2ijqvGJe1g5V7YAUL8-pCtYfHOtCA7raZckPuUR904vlIuwEYcutX4Cz3b2CM0_qf-NJcb1H810wQ35K6__zrThFUueCvzT5fE2w8tKA36BGVOcwQOXtgNiXNlX3kciDAp2D9HTiKnQpA4pknQBIXqDFH05Q6JyhLwQZBvuNw1ZSN23bT1KaOjWoMVgsIKQGjveU" />
                    <span class="text-gray-700">Wifi</span>
                </div>
                <div class="flex-none w-64 text-center">
                    <img alt="RO water purifier" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCovyNdiarYUUvr2rhxCoDYae7Xq2s2weqX7OS-PHvTQF0-ocOz90igTKF288g6yCMF2m1h8g5UGAgHmEyFXlUdW5ZBSj7DHMlfY3-A_13e9T9P2AdJJajVbQKad4CRsQVA0ORpMjw5w8sSzN_6ZN1j4AULrvwGeZVjkrtAMtM8aQPO2CLq_Xkc41kT4NIs3ZHZvAzYWTEDfv46MopEcRrI-jr9Nkawu1oPU4KxHDyKuWf0phXv9udGzgXP1cQANORsFV6Kjy4gt-Y" />
                    <span class="text-gray-700">RO Purifier</span>
                </div>
                <div class="flex-none w-64 text-center">
                    <img alt="Air conditioner unit" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCY-4Lw5knLPdLNU9iBAhWSfKT4-tS8B3Grg8E58pfkT-LDcC5W0paWWVb2_Yhd6Z3qB1Rc2Hvj2mbXwzcCqEH_jPWaz9zFLPAdM1j6yZy2jcEYcfAI4cAYv4xPAPQSLOHhrYPdDT1UJIHtNNZ752VUcp5Q6fieLq8Vu5RCmIH2CxzfP6k4tIM5jRXNSxoWfVxVBIDyJV9sWBEoiLYniSp-8Ujt4W4ZInH9hBlE-Z1oPzT41QXhNagKc2vM3KsuEyH-tNVW8nD0KLY" />
                    <span class="text-gray-700">AC</span>
                </div>
            </div>
            <button
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-100 z-10 md:-ml-4">
                <span class="material-icons text-gray-600">chevron_left</span>
            </button>
            <button
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-100 z-10 md:-mr-4">
                <span class="material-icons text-gray-600">chevron_right</span>
            </button>
        </div>
    </section>
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-semibold">Rentals</h3>
            <a class="text-blue-600 hover:underline" href="#">View All &gt;&gt;</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="text-center">
                <img alt="PG accommodation" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgu_80r1HIy0kiY_YSyk_xO8_f4alGj--mpf5v7Tu3NvtTQsbaiXDnq5FFy5w5f9xK5ZX6LXRPgD6yH36_5P7RDvExfLiJW2kkqj9loJLtOFmoFctg3WAQatK1OrxThZzE-fwpwBft6n8-aM1sJypzsrD385F5MQgoJ2vzMXfe4-57nSUJnsHpwnW5WihjlNDuTRF88i-_ZMiJzBCsy4Srfcwg856IDSDfJ0Ae6S6sShmJSHA9XnUPgSQS_ZeFZjUiTdiJv95O5wk" />
                <span class="text-gray-700">PG</span>
            </div>
            <div class="text-center">
                <img alt="Coworking space" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz7nLQ8JnR-7pZ6xOGQP7wxBbfLHCAnUuT9Pr_4dcwr3mQRNBd6XmSe16ZdQ234jCOv_vBqI08dJOqJF3TGnPrEIkM6r18FULf4Ay7Qp-YL1XCqxbj9mzwZA0IP_P0d3volY-mKg9fb1BzaulUAVwHl3Kuk5xDvsOmjoF28eaWte2LCLzL8fVFad0f-Ru3wIT0PGfm5MVgdQnm_CgYI0t5l9GaQNmPWYqk6Em2Qqwjh2dyXE4hyYo5uwzj5xGpDvg2AgoZBSE1oqM" />
                <span class="text-gray-700">Coworking Space</span>
            </div>
            <div class="text-center">
                <img alt="Single room for rent" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtfV5Bn7o8UYe1rN-1yOtxaas7GGXfqrhPPskIT765r2pQaSIf1xwchNEmbEdcmTf5HoYEcj5JDOUE_yBzUdd2TCmyYrYcQhFNN0ylKB01BGyivr6ru7MQcNAUFNyUcDm2P2ozTD2rjDMZOWq0I6zGLj71auxNxO75CMzOdCtEjUGwTQsgD6WjqSsel5zHbyd07zty-6bSTrUHKFQdsfYIcohYHV3KlAkYDMoLzg2oQuvGUwJWhSQy8YMtJZs38crAi765dcE7Lc4" />
                <span class="text-gray-700">Single Room</span>
            </div>
            <div class="text-center">
                <img alt="Flats/Homes for rent" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuANRvqBo8yAGgD4LAlaureWLoNu3Q3OULEg_l-ZQPopLeUpECflU8Fdy6jMyZEtWgsc8wMB03QYzUtNECMkH8sZ-cI2x4XcjPS-jW64VpNtxBW8L3SLXOVeUA6A5vhxPqxYBFQ0svxifklKaML52R_mxG3-EVtOnFbZPx9cG0iF77N3zXzDFTkCFtnPm7HeEx73EdI22RzrZhzSKN6jNGipWJrfnCGh9zgRD-gjInF8TlKRt7vTCCS6eyDlT1kPqrkN5W0i3iBO5G8" />
                <span class="text-gray-700">Flats/Homes</span>
            </div>
            <div class="text-center">
                <img alt="Retail shops for rent" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDypzkpntULkbSxz6qyaBvHXtWmfE6ML4JtHwVOfvxekm5_2b-e6xkdbmMa2fr_oYZv2qVNcV8BTPPeKSsYRglT6d2BSFTR4jPL_ZFuFqsjOkBN92_vonKfXFSfvm1Kc0kNoXMeHvf16BSDKACQaLW0-1MoCZhkNQoOdbtcDfbtkD3_GGmgXoBvLpVEK-uzoVwjZfpsacEzyliLbL9hqFMCCNpttfrtK4SDzxYvLdWFZ0jjDfLp9Jp9qzKFoFiZYoKhxf0buvJjHi4" />
                <span class="text-gray-700">Retail-Shops</span>
            </div>
        </div>
    </section>
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-semibold">Transportation</h3>
            <a class="text-blue-600 hover:underline" href="#">View All &gt;&gt;</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="text-center">
                <img alt="Taxis" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZKVnbJEWm_Hx245LUuZNNjCcyRdjIbFs4kxh83nmjDCwQhs8g4ZVfbVXPzt1qNMeQEg5zznoMg5NZRaqXq-Ryr-Kc-aUMsB8IXKPHUglPEHP6W8_PKglR6pztMPyZ1GCZnGmDF5xRy-YemLqimIF7z1RKQLYI5b6HKqPl9jMdMlzJPXz4SLVyCjR7l4SQZar0HfeLbPOHzb3gWufD_RxCSYiA_18CKNCNSf_bx0ujUMJ6oFG2ysbpmhQ_lq83VYIxsOdrWha591E" />
                <span class="text-gray-700">Taxis</span>
            </div>
            <div class="text-center">
                <img alt="Pick Up Vans" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEUw6M22PkThGxPWCxxE-TYl38escIqAiJhvpPoCHAKVw3zbc-HNzwBZceXWItam9o4ADErWYPbW6G0_jNNMlxj_mknY3C7FGFIE7sCnYILMPNjADldOHRwHB5zazO_9LVmfuMaAtKb_XRJwe9aKW_6_PxAR1M8yX6cAImoRJI6T8KqI5h7wOgTc_wsPbN4WYRMdh6ozK8yS6Upqz8iv7rL5MCFh_YaWO6L2uDoFOAD4BK6tpVDosJK79LwE8F1kueriu-DAl2S-o" />
                <span class="text-gray-700">Pick Up Vans</span>
            </div>
            <div class="text-center">
                <img alt="Volvo Bus" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGq-izW-KqkHBO_7fUowVzX1oacO_FeKOF5mUwqCb10uQEdrMBOwRF-ozxmkbROWikr1xfbddqbs9MUGLPwYIvYWdk5_TK1WT4UuDwIXQHLzr4srJrbR9WxvHe1efPZanOC45I_MEkKEEMmDHwbkx0Tm_TnqbwK_ijhEvZtY9HDW3mui0KZTGfXbsJ923cyX2ufJcGF8-rW9zurNHi3IDSWEBmsbBQ0VKrFUQlav9LFR5tE0gcPwVDGmGg-CJy23e0CXVWCw4BOZE" />
                <span class="text-gray-700">Volvo Bus</span>
            </div>
            <div class="text-center">
                <img alt="Water Tanker" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6W74p_QOz_Qa_1NWNO9XY-JQgc2LXBFE9hh2RAX3G9pMxHecUl6RFl0ejdmWgtWOO7Fu9XNvmfE3emP7x48LvRFzqoSPVvL2m7osIW5Ms1XJNOdTnyXHY5UVMX7GkQKW4mwg94QIChwdDg58ZZcYwftVd5rp8sNmc9MiekqDXPmDRxfYaSpfZVjKFFovqcWFdJHuBHfcebWgLcapyedn43i4cY4ZPsL-poaORtobZ1IrTDoW6wKZjgriUT74_5OoQeNsPvvBafZo" />
                <span class="text-gray-700">Water Tanker</span>
            </div>
            <div class="text-center">
                <img alt="Tow Trucks" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZR5u5PxWxUyHRj545YJQ3vGjm9exmUh7H-peM3SmwtXRS3Vf40sayeNmePwuhoiJyiKWSYj375jmKbad1Dp2lrT08bxI0Z8J22BY5_Jf-KepjmbnAERSGTGJA_g6SO6yuemCojvi9i1Ku13PikE1HOOH64SEmFJjsd30IYKZ6K1qRz1Hz3-G64xshX9jCAZgUqcayaxG3yul6cwkcWErAd1dgLKX9KvdyPYP9AfYP4NQsJq0ZoLnzjYe5FBwuc93PT8m8IrLCc08" />
                <span class="text-gray-700">Tow Trucks</span>
            </div>
        </div>
    </section>
    <section>
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-semibold">Adventure activities</h3>
            <a class="text-blue-600 hover:underline" href="#">View All &gt;&gt;</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="text-center">
                <img alt="Tourist attraction - temple in Bali" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2L6FBd6yfPEBnjmC_MF2UV525Xc_nvC0dB55-qwccXVnA1hzVzXx2N9a74Hm_BU7EA19UlZCe1iCwAr2hadTYdWnSU471-nT9I1lCRLK5cD4n0eo1aTJWLSfaCHOWrX6cHjNP8vLuovRoKudLbP4ospOqw2nbGLBtKPx8xhBw2rHNCT0NGd2OO6d_BcpNfW6nCgFeukgVvA-fMcvKiCNwDJFlTk_f4nrrx7NNh3e7KX5medsiQ7Sz2F3gHaULQ_KdKZYQKhCB7iQ" />
                <span class="text-gray-700">Tourist Attraction</span>
            </div>
            <div class="text-center">
                <img alt="Paragliding over the sea" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCI0TqkRBAR8EkiMrUvlYGk2jLJ2vYCz1yC4FmGaTAnqNtxaddntZhNlKjm7Bt4tFwesBN6rXNzcmEx1iD5CT3Bj5LFaYksaOK849uqz-CAoj-A-lky8Yyz9AXOUsWAcohPK5eyDt96Rkt01bQsZLEvzB0qH1FVU2wXi39mNoKZ5i-sJhaSN-OCoKM8GyTLHB-3NYy1bWErXR4nWMeg3O9ANdza70kvLnmYocn4gRW7EAE1ad3xLhQl-dzYmHBo0OzCYGvzc1pJBng" />
                <span class="text-gray-700">Paragliding</span>
            </div>
            <div class="text-center">
                <img alt="Bungee jumping from a bridge" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxzCwF7M2sHkbZ50x6NnwR4EwE8q_2Qfz0eAFoqHZbeuWJ5M9On-sy5QQsqbFrg_g4GovGUGEWIumU_1PIlMTlN0Ft2K8DYuVFMCH44stE2TJ23yv8ncBuYoIWYtGqClmH7D5xYJUtnliUJ0KkrX5vFAGXcry_PWQAq1f4UgOhUcdG6u-hoWmzXuvi06cF899kAAaidbjtvydTgT58zbnBbZFDh7nARnetIRPm_yzhXEDC7zwlkt19D9OyUW81YeuUha2YfO0ec_U" />
                <span class="text-gray-700">Bungee Jumping</span>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Construction, Home and Decors and Architects</h2>
            <a class="text-blue-600 hover:text-blue-800 font-medium flex items-center" href="#">
                View All <span class="material-icons text-sm ml-1">arrow_forward_ios</span>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Architects working on a blueprint" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAh7mIti4J4E51lCLLpV4X5GXhJkujTps4E6HDCwOISua8T6YuxKhMQ3s0_L_XHHXulOtQt4BiostmS0VdXVPGMQ-nWSfMmCnGU4WjHdvBmkJKsGUnAp7tDau8nSWAY5ycmOAI52mF_5EJp0AI7s0W4ACSs99O0ssvTGFS0GOC-6ZB4gJ-_9uT_5IOjROif--PgNX078F7YhDcS_slA2ohQj7EPsF86jvAAHQroHtJEPKrmuaW_LUEKQPRb5DTTFCl-6rR70bUSsh0" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Architects</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Modern bedroom designed by an interior designer" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqb3rhkKrNfihvqHGtYWIbKbJkep1nKupVtAXgjwCf3YKxpKa4nxUMB4MBDUji_Fxa3aEReXZyFkSXdtV1pgS44DQ-ylyphIi5FvvnaTu95Hqt9Lr6afuadGdyekIEAZMnw4Bn5vJ1ac0kFCBImun9Z66Ys-kcBS9q1Pf-Gskm9NO-eVjcOtmHhoEcHLGCinmxCLuU3DmV1E6ttNzlQUe6V0lRjemnA-VfBdp1XXGn8AI-fhTj7m-JBCApW_BiMEurPX18UjEwAO4" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Interior Designer</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Sleek modular kitchen with blue cabinets" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCa2_VQ63hkED8lCIMX9wyazN9Izo36AUhKY1xn6u-3IqQOIHxXgCuc4Ls2GpqAHuFWyGqq5IWwBFSh0apj3f1WMtdgAAsiGZ8XxM2xrhfM5Gto4ehzu8gyvtElQB2M_5DvF6A3BhCqXlhazcGhzAOxDFXI6XYnFC1LiOeinkKAMjGGNGBLS7zvs10QSQNSVFrELQH2WDbO7t7bH_M-yxvUWd4A3-VCYn_GdwwlaW33TkuOCOV1nbH8h0XX3njAIuCie8D_kXMdF14" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Modular Kitchen</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Construction worker performing core cutting on a wall" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBm225MRaWUR4WKEz7e1ix1t-Vj3gBd5D0Xum-ikY2Hi52zZOt4cO-wmN5U7GrHRT_Eouo3N7YnDbckiZZqr6ph_sjDB8B8coLR3jaLYxK87G9uQpNRqD0blPreOIf-bvdBEN90fAbtWSPwD-NJ-g0DcvLEVWchKbEa3xm_qk8HdnyC1TxqIdvfsQpHmphP-rXRiQCAOcl4iHV6fBy3VDlda9n-oPRhv4yqQCb6IBiMq8qsHeNwIs9Uw1spqCuFPi4DEVqu4H4Orzk" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Core Cutting</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Intricately carved wooden door" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDA90xOyBc24QTc_2Zu3Mnm8kW3OonfWkoXTWX2MyD8kt7ZlJNeIvRaYeWqVMy0r5ZSRe-CDrTSTctq4NI4LizyKyyxDag36NyXCREVgOQLIeGi6x8I4S3ARShEBl6lqupXVtftuBG3gYP6xD-p2G6HexnsRArACLyO4xs-AKcZoAt6RQGQY_KQgZP-H_BdqgKT04Zyyh4FXDlZT7pEUK5jbKxyU4zX0YELmRaKYi5MI8piyIaEQvhNy5N2VeBhBx_9DnhH-jlHe44" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Wooden Door</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Wedding and Event Management</h2>
            <a class="text-blue-600 hover:text-blue-800 font-medium flex items-center" href="#">
                View All <span class="material-icons text-sm ml-1">arrow_forward_ios</span>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Photographer taking a picture in a city setting" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOuSDyVm5hDUXrMIGOZLNUNRVTyGPFECPVtclET1kgdBwz9VlduKEZIcJQ_UomcoFD-wJAw28lu-lAMaxZjIzkgpWMdnK-PmJlC0ieUsdKT0r5zErwqzHutyaL6-19swswIzgMCzMtaW7KEA57e7hBh6sLPFlxmpNxRyTxfrJnqNHcrxKShu5yCG6x2Jj3elRHts7x0sb1vssF9d8cSXo_1dPWcCHGS1uD8rZ06PwiAUDF6N2oBIsJsnftbB-SaUo5qC3sp5Ho6ZU" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Photographer</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Buffet of various catering dishes" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPOi6XLYOgcjxyUqz-4nrF5tjhrRef5zx1Ncs2YL0cqJAoMwJhpb8rNYxYtr7lxYrqUuxy8AiVJmWMKBF227Sz5yB-QmDNMZ1j595axgsW5y3oIWTNrIpMATzY5LSg3ejzpMd98D4oCXyw7Y1U9deZWczvJ8qGFcdE__QoStt8RuyUARJypGejUFvypLRW7jn8u54TxZfZgKiDG8zOqP7F7NOqTTO2oarojCW4i53sm6I44bQBXj35XryyJC7iY3LntMesj41fzCk" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Catering</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Party hall decorated with blue and white balloons" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6EtxpJfPIJiRqSsVVpBKbi2MHm1XDKK5mPsfkkOfeJs_uINxAs40roFV4HFal4_zaDBsmy33uVrT4BAXFC4eYI91evW0m5hYyzWcISKKPBo5rRR6tDoNm3MAe6pNxudS4oICYIyE3lhrW5W4UwiIzPz78kM4AaUezjPAN9QccjUMV4qGXLMAc-ToStvOdgway4xVepDrTsAityyJeTT2pvYBtHXfEoAVrBlto3rEmrImvzrNBrmamyDwzwib5NrcY9AfFF6aAe0I" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Party Hall</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Marriage palace decorated with pink lights and flowers" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqEu8ufqpqpA065pee3kybFLeU_YItzeNlOoeM_0g0VoM_q1CvMYqGeRFIJJsM4fL45OW8ZHu2yH21Dd14dUDfoUD3E8GxV5hhxsLXmHEXizhOsbRHGs2ilG9D9pokmwnGhI3aKNnTqIGptxw4LPDgBba3sWGRcUPL2m5gHYLpzoffERiAeRI7njyAW1DeQta1gxk18arsr4sjVoYHeVoq4HP7TXtzHk2k-zuMqo-TcSFXkNsEBAvvffOHDyt03mI8_Oslp8oeSss" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Marriage Palace</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Traditional Dham Boti dish with rice and curry" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXiC2FcDsDHaN7cZlvUZl5nTljDJ1G38X7oZosGAhHpwi0gprHSLvV5CfcJ_MGR3Bd-9QZfHqm9o8DlYiP-kgWmWFKfQfjaaZNnBinsppgiPpttdgFEF6cXuayGukZ9TaQUazChHtPTcbij2HCczN31NTRhMZw2-84Eg-DXP1cwhPPgAzYcICAVsI_qdVVekAj-iT5ES2VAl-lKm9uJGUn6GiDghEJdqabCwTSEc0WPOUXCzzbVqYtHgOPI7w_AlkVirx68ADz7Kw" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Dham Boti</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Cleaning Services</h2>
            <a class="text-blue-600 hover:text-blue-800 font-medium flex items-center" href="#">
                View All <span class="material-icons text-sm ml-1">arrow_forward_ios</span>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Person cleaning a sofa with a vacuum cleaner" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5MqbowC4ReNAjRVkhOGkkAT5NV2XLSRSs402JaHActoQO8v8sNIgeYS7FyRaeoJSM1WamaW3uZCFmP8pOlQvlNUV08xM87wmIk0lF4YZjaxgxptDZtbFCUjF7IWb0_qaPAbODHh2-1HKHYt1RxxEo-feiSz7xF4u5U3c2Xf0VzQaeXDrBoENObNvTmDtTa9GtTeXd2DIPG-GrbYoMvDSXVkmdmsO4z4MX2Z5znav_LlOXQnAgqNIvpviC_Nk_cWgD2K5bzi7yHwg" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Sofa and Carpet</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Person cleaning a large water tank" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuALFguofoR1yKdzF21bCN64Elpi6qy1XaptTNZ_DrJIHxTdjHFZjRYP9pRcqr2-3xDp7bKePo1FgYxDCTD1Fr9X7PAp86sQ-VCZhN_IV6T_AqPMJQlK0N8mesMvWKJTPUSO0jqqDCgc1Y7C-Z6_n1zGzKuBAapdinqRmPCTns4raUf7cBDQl88vHroomNA1o2NiYCpur4mTRtruGLNVBWp9nSq_wL4j5uCzRpCM3rVXxJO7RjaWKeFmU0FOqR0B8rgN_mV2JRgFfzk" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Water Tank Cleaning</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Cleaning professionals mopping a floor" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuDDkDB-3iHGRXnJXtV18xu14LrqmG1J9Q5zO6LGpDTuIzuMbNjW-tWlYDnEiV-go-0lGfT7dM6B2fHn7MNiYDHrTEh_bomA7senMGZ-WxqhSrND9PVZbZW121jiVdFaD6_0GZM7-Ecfz13erEBrnRTwGvU5lOLp_kpy_SJxjyLBMtcPFcwenJMY6U53Ur4Mg417id1DPwI0jWjjrp812h4FQzCZ7Kybftwa9p4DrTQacMIIjToItgPZVkT56gaKCZAUP33pGgkzI" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Home Cleaning</h3>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img alt="Person spraying pesticide on a porch" class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAE0Vu51emWt7uHocS3PRhe2c-isu9gYsbI4qfo-Bp1OoI3-JL-qODIRvfwnab9vCdxNoTe5YWt-od_PbopaoWU7NnbkC52vKI_1giHtdABFq7-ObCS4zfGPghlhPqFJN4Rk5euTlJiFiDF-bDsysEaj1BKa8vepeXl7P4FtU4hGQQurJ_2hJMY0IJLo1orqhE8CT6_ni7fjdamwogKrCVL7tXxT18fqT6c5C4l5o6gEQKrkP8CWTqsGBZlRQLr_NBt2QdgPPDHins" />
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold text-gray-700 text-center">Pest Control</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Hospitality And Accomodation</h2>
            <a class="text-sm text-blue-600 hover:text-blue-800" href="#">View All ++</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="flex flex-col items-center">
                <img alt="Hotel building at night" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMtIiLIqJCO9W-Orcw2s_EKhw-J7JxFbaxEzZE0UIazRTGbgLHTR0TGPlhjFxvT-RqZ-JxPmF23Y0Cmt5dMGBXEAbz5phEHBs0QefUV2UuNYkLymjZVbdGUctiok-dpMacAuJZXi_rQbvvgDjBez5SjDlXQnbj28PIHfmjaVyKdkAun9mMlnDyplXDimrtUgOAVeFoTHJe0XfzVdShi6EfKyfF1jEdkqkpYhvgWkmBesG3TzrWCreMembxOyX8dQLX5883Wy0grsFV" />
                <p class="text-gray-700 font-medium">Hotels</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Traditional homestay with blue roof" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDL21xLTynUEhi3rYJKrZq9DrI-xk82lcQSVO9DtCtt9hq7Aup94e4ViMarxNllGvFfeWuB6aBqDT7HLiF-Q7NVuwrj508MuqPeQ8hxfF68WLYXnGon8OYta76VPqvFSQyBPs1AS7d633tJtyDehxa7m-YnwvyiGa384h824dKnYAmjot9Uo6yEf-AgiXBRa4Ghu53ecIdpcDhRGenW3Ph8tDj66okitBAXLQxf7o_sFN-IuQfNfv2H-eUezialf-y8mj1QuUoTm4pT" />
                <p class="text-gray-700 font-medium">HomeStays</p>
            </div>
        </div>
    </section>
    <hr class="my-8 border-gray-200" />
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Food Dining Venues</h2>
            <a class="text-sm text-blue-600 hover:text-blue-800" href="#">View All ++</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <img alt="Interior of a cozy cafe" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9sfUoMdxu1TfauFbahtWL586VDFa787aS9Rnuj5C92lE9-4_AgXuqCh0RaG9p8adN1QjJQE0DCoNF48fv3pKKuXejsezkffs-i4oD1fBwz-fQx_l8U-e-BT16W6whyfDi07HzBX67biA0_9HWcIvB-FuO9fwzdImRFEOwEBEUUJRG9fstVocFj-8RUzss_H8O67UnW7uCZPbxt_CycuBC4pUE_tWRS9MxRVCNyWTSZW2s3dq11-XIfSR-nAfJie2K95WI58a_rV6t" />
                <p class="text-gray-700 font-medium">Cafes</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Woman enjoying a meal at a restaurant"
                    class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlQ5DY0_fqQk7JiRGbuVsNyMDQQUj26U1H_ZJky9_nFGyqH_5FLU5kNNJ9B4Ee_Rlg04JjNqwowCApA9tke0pWJy-616uWqNYXVw0ZfxeyVxOCLe1zOuKnrJponHv6CZ0abAkb01gGFds9l7VkMq328WCrzHOLDhzZ0cEVNavXz2imgTZAO_-mN9KP1aYuFZAvlfWPtiAn8npiqoE3_yrCHVU9E04DePYkrLrVbe4HvfD5pv84Fn0bCRtk1hI91An4pcl0BBcVoFYg" />
                <p class="text-gray-700 font-medium">Restaurants</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Baker holding a tray of fresh bread" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqy91_THQJP0rpF8B5OgWGUAEGSRs2pgriEE1nDWCvF1YKSqo4sQmnOl_H5fEpIJsQXqlN1-tJrXAwB_5sm48rDBXRkm4WwnrD0XrriWTsSOAzyL90xFzhNGyK1kJDd_VVqk9ApDN1ob-eH9IW0C5fvoT-5sFlfP4BRBI-7noLv33hII-nRmIcBLFgNY8at1aiBgq0ykow35_fADnLgb7-TWQZnyt_El4a4lxu2UZOoc5Nv8bkRo-1QLdqhr_gQCcwJwru3E8IKllM" />
                <p class="text-gray-700 font-medium">Bakers</p>
            </div>
        </div>
    </section>
    <hr class="my-8 border-gray-200" />
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Fitness and Fun Activities</h2>
            <a class="text-sm text-blue-600 hover:text-blue-800" href="#">View All ++</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="flex flex-col items-center">
                <img alt="People dancing in a studio" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNVWp_qX8H23sO0OVMUkJIuDmJSpdBtbZqzCaKMSwlQpDXBOWct3FCENZbnYma74RV9mh4XxoABo98e1ozmDghkbVHofG98ZiRoApMGYlKW4pQtZFzeT8aIrrI4XULm1J20PIirY98XaUy6Hss92AuN81DbQ0hcHwfI-ujyehF-am94zZs5Fvc6TRFM1un-waKVOH40tZ7i4pIoCNPcLK5y0rm6I97UAuaDpzuL2Yp8SXfc7pQbtpg93-CDijXl5yUAupnrTudVrHO" />
                <p class="text-gray-700 font-medium">Dance Studios</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Indoor swimming pool with glass walls"
                    class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWXBhvZRKp2HoZMjfG5okrJMB1gTdQ8SvC5rCyKJ_q8zaEQRark3qbiSUla_KclXTI_90Z9qbOHDUuSTOQFto6Pze5C6Dcx52G6gZvRMMOASUeKi0iS0Fm4x9nd3c0F2P-qgQE-JxQA6oC4gyCW6HbrrfT9s_nySyWUW3YO4XiJjk5D_tss8h0uU8-eltLUmG5T_yTLuyPo0OMHDXlC1Bo2sX_AcHo99sfsmELEI2Gn4vWEiGknrWHUCkEs6q5kQsECdvbK0K_jwsJ" />
                <p class="text-gray-700 font-medium">Swimming Pools</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Woman doing aerial pilates" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4RO0tHMj7Md1EYGsqkV5_u7YPaNODnz_qCQvsDz9Qk9Wy3Vn2Y8JBF4H8vjTAZJA8k6LeSN2v9TtfRcn1WfyFlPoVOlZOYhbMQGzl3O8f-2QNzm9Nsg3H0RbBcco3BcR5XP9kcp9dXDe6SHwHUSHxOu9LucxRt2gf8J9yGg47Zx8PsCrPKV0LyrkbV1eSI61OpVzdgw0n1ne90EC6vbOn8KHfhhWv7-59K15axxRSD1EYRnD6oOx77l2Ks7bMkRRMQ1NkQXfzNF7z" />
                <p class="text-gray-700 font-medium">Pilates Studios</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Interior of a modern gym" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtK5SCsMokIhSgvk3pjB5e8e0UjqHAVCaGmziXSLZYy8vmIfh3BZ1FoE5qxRsK7aW-uzwjzgzd1pyy8-F0eQ6VCKH-zhZ4nNc_61HqYz-J07YlySjNf7DqtsCs34QbDqUa2l4BQnHVIO7hxC-iEcWgYr6fVQ2QnH2y7LTP5aZJwqryr4GgxaOkWQw2bi3MrXuhtsW_71LD4imZyYVL2T8mlBR2vEu1PnBE3mFIm84H1fyYV-a2YpKoRqHh4qVeBY1gnrWIpcuU0fHD" />
                <p class="text-gray-700 font-medium">Gyms</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Bright and airy yoga studio" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ07ThzHcOQU1-rcg0BwB5U_1Jh_z3wOIf11POJ4ODdygO9ZOuB9tomqF8QWSw5xLiZ0sZ_tJyWZlOkbPYaPBBsBm-IDQkSIYkaL1cKYNZd35U0LUPhkUHwBumHflBdO9WUxvI071ubUP4V0vI-G_ohJygQtDkOASIPMW_zuZWTsBqKndlZ_1FMqceS0GHW1psbpVtZoQ9qiHE0zmYgtc8HQjA-JdqwvfYuoHnR1i9qn0qXEpNDDdqYLD8S0Dc8_N5EIMRpp9ST_7M" />
                <p class="text-gray-700 font-medium">Yoga Studios</p>
            </div>
        </div>
    </section>
    <hr class="my-8 border-gray-200" />
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Legal, Compliance and Accounting</h2>
            <a class="text-sm text-blue-600 hover:text-blue-800" href="#">View All ++</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="flex flex-col items-center">
                <div class="w-full h-40 bg-gray-100 rounded-lg shadow-md mb-2 flex items-center justify-center">
                    <img alt="CA India logo" class="h-20 object-contain"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8OH-ChbLhGCvKe8AqndFkdtWfgUZo8O19ZTc-hB5kroGmdB8De1wU6LQjoSngEz4mZCEJJNnZ2Ak1n8PYRGtJARLnzKEI_VosR8GkozKkl5UkO2PLbC0RIkIFFbgaYrcsaVFtC14tNzH2HCxpimmEus7M8P_WYJwKBBx6CYqdK-zWgsAbhIiBHYJj9xd5iS4Fu14VOD77R9xONYHSqPDlO20scjm0dwFmIG-M4NLqN2A87uzzmN8t5c8vtehMD26FHiKwWrsvQw36" />
                </div>
                <p class="text-gray-700 font-medium">CA</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-full h-40 bg-gray-100 rounded-lg shadow-md mb-2 flex items-center justify-center">
                    <span class="material-icons text-6xl text-gray-700">person</span>
                </div>
                <p class="text-gray-700 font-medium">Advocates</p>
            </div>
        </div>
    </section>
    <hr class="my-8 border-gray-200" />
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Real Estate Consultants</h2>
            <a class="text-sm text-blue-600 hover:text-blue-800" href="#">View All ++</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="flex flex-col items-center">
                <img alt="Real estate broker meeting with clients"
                    class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAysAiwxtBtxGZh7Xmus3EBcrjNQOvD_vVELfJFYWK91-R0lkX7vQOZv0nhe7IPm3xK6EVctqNpKxpTK6lcjS_0TbdOnZuXmUaVhoSBesm2ziQGY4tE95a0a7XZs5_u8uICfXiZEkL6hNVGYMzMc7M-IoSTrtKkxmqXMIGw12aqnOgWhQchDMpoZIgM5FLJhUxmkCPdzZ__ESYbLwyAorvrh_eTwWy2CykYy2yn5rPlLZrdgieCCyOwiLSD7JL-wIYl13wKkDLubwd" />
                <p class="text-gray-700 font-medium">Rental Brokers</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Illustration of property dealers with a house model"
                    class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCE_w-PBlMnQ3gzf_0VpJE0Cl4ByHOybULcCgH5l_26NZrDr4WVoAECP5evjumr26E5GqvWcSufdDJqWE26onGu1h05i2dR1LWW6ahGOdEEb_PqnixCOHE06Y_SPrQL7t2hB2jAHCQBDISvVWzIFe8pcOAs3aTpwFPVdSpYhQV2CTEcbyoEL68GIUJgysYK054fx7ZbLmoS3meiB0hMJrpN06wN4szId5qiJpynhHlFinBNpxW5Xr0uprNIDaALfppvXRZhXjz5vNZs" />
                <p class="text-gray-700 font-medium">Property Dealers</p>
            </div>
        </div>
    </section>
    <hr class="my-8 border-gray-200" />
    <section>
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Pandit &amp; Astrologer Services</h2>
            <a class="text-sm text-blue-600 hover:text-blue-800" href="#">View All ++</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <img alt="Hindu priest performing a puja ceremony"
                    class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMIlB4rDoLXu6uVk7B2Fpc8avO414jzZevN4dt5deOK4DysC0gp6HZ7X6TwrragVJC8Xnqifq1VhMYE7FIVWn8sAA_x1dEtoipO8_a50BKa-KkCmrNs-6vfl9OfgMZ2rWXrClpJB1o72fdiEQrtgi-tTVHQsxcN0X6MTto2GFyJm72q8pw7DZo-viELYpsMQZQrgZNQPNeQcKxGqkKWtTStjRkXZ8qhf-W0DIZp9NJtdie1VrZ2l0w26alC5Gc6wlBTQrBRsbbg3MH" />
                <p class="text-gray-700 font-medium">Pandit for Puja</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Astrology chart and tools for consultation"
                    class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHkAb-Uo99DhueOMByT_CX6iMYPLekpyWUHd86aM7rnE97J0O3eC-k7OJuTETcbqRzEFfl0hG6IplskGs0IumiiMsXQUd8z9NJKOrOplz4i4nbwh4h_SgZJslu0pN1qxDyxeHggG1mpC7uQ0GzCSH1clf8vHMw1vBlPKR15VlmB-WtY3E0sjMprVBnHb0ZRhG84owqq2p2cp_19DxQyE9lX60EBEJ8-5mUImFyPgvGvG-yOfGCxMT1CHeKPpUxwqOZ4jEZ0QOyPDTt" />
                <p class="text-gray-700 font-medium">Astrology Consultation</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Vastu Shastra yantra diagram" class="w-full h-40 object-cover rounded-lg shadow-md mb-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLv-WzwABylqBWOaudCrO1SXbg2Vc7OWIUnDpOkbcfZjFNg4mZ10h2lXtxrQZuX7SNaod65w3WxMgO6ogUQZUJNdHI9Do1ed0lNem3FCdCWebo5uXMRnnC-N-h_s88rwRKwkCy-FJk2dXf1sqOV_aH9SHX85_O3rkCPjoo04TtZf6bDKO_hTOong16LDXLIMn1GV7IXS37SGM1qjCMByqHBfDLVMLzm6UW23lfExpg6s9qJq5sZqZPQcg7_qEQyLpmEnUym7WlFHkR" />
                <p class="text-gray-700 font-medium">Vastu Consultation</p>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        // Simple scroll functionality for horizontal carousels
        const carousels = document.querySelectorAll('.relative');
        carousels.forEach(carousel => {
            const scrollContainer = carousel.querySelector('.overflow-x-auto');
            const leftButton = carousel.querySelector('button:first-of-type');
            const rightButton = carousel.querySelector('button:last-of-type');
            if (scrollContainer && leftButton && rightButton) {
                leftButton.addEventListener('click', () => {
                    scrollContainer.scrollBy({
                        left: -200,
                        behavior: 'smooth'
                    });
                });
                rightButton.addEventListener('click', () => {
                    scrollContainer.scrollBy({
                        left: 200,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
@endpush
