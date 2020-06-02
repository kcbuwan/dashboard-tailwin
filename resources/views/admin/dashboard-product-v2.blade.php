@extends('layouts.blank-full') 

@section('content')

    <div id="main-nav" class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block bg-gray-700 z-30 hidden">
        <div class="w-full h-16 bg-gray-800 flex flex-wrap px-4 items-center mb-6 text-center">
            <p class="font-semibold text-xl text-white pl-4 text-center">ELEMENT 7 DIGITAL</p>
        </div>
        <div class="mb-4 px-3">
            <p class="px-3 text-sm font-bold mb-2 text-white">MAIN</p>
            <div class="w-full flex items-center text-white h-10 px-2 bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2">
                    <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                </svg>
                <span class="text-gray-100 font-semibold">Dashboard</span>
            </div>
            <div class="w-full flex items-center h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M17.431,2.156h-3.715c-0.228,0-0.413,0.186-0.413,0.413v6.973h-2.89V6.687c0-0.229-0.186-0.413-0.413-0.413H6.285c-0.228,0-0.413,0.184-0.413,0.413v6.388H2.569c-0.227,0-0.413,0.187-0.413,0.413v3.942c0,0.228,0.186,0.413,0.413,0.413h14.862c0.228,0,0.413-0.186,0.413-0.413V2.569C17.844,2.342,17.658,2.156,17.431,2.156 M5.872,17.019h-2.89v-3.117h2.89V17.019zM9.587,17.019h-2.89V7.1h2.89V17.019z M13.303,17.019h-2.89v-6.651h2.89V17.019z M17.019,17.019h-2.891V2.982h2.891V17.019z"></path>
                </svg><span class="text-gray-300 font-semibold">Analytics</span>
            </div>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z"></path>
                </svg><span class="text-gray-300 font-semibold">Inventory</span>
            </div>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
                </svg><span class="text-gray-300 font-semibold">Enquiries</span>
            </div>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M16.557,4.467h-1.64v-0.82c0-0.225-0.183-0.41-0.409-0.41c-0.226,0-0.41,0.185-0.41,0.41v0.82H5.901v-0.82c0-0.225-0.185-0.41-0.41-0.41c-0.226,0-0.41,0.185-0.41,0.41v0.82H3.442c-0.904,0-1.64,0.735-1.64,1.639v9.017c0,0.904,0.736,1.64,1.64,1.64h13.114c0.904,0,1.64-0.735,1.64-1.64V6.106C18.196,5.203,17.461,4.467,16.557,4.467 M17.377,15.123c0,0.453-0.366,0.819-0.82,0.819H3.442c-0.453,0-0.82-0.366-0.82-0.819V8.976h14.754V15.123z M17.377,8.156H2.623V6.106c0-0.453,0.367-0.82,0.82-0.82h1.639v1.23c0,0.225,0.184,0.41,0.41,0.41c0.225,0,0.41-0.185,0.41-0.41v-1.23h8.196v1.23c0,0.225,0.185,0.41,0.41,0.41c0.227,0,0.409-0.185,0.409-0.41v-1.23h1.64c0.454,0,0.82,0.367,0.82,0.82V8.156z"></path>
                </svg><span class="text-gray-300 font-semibold">Calender</span>
            </div>
        </div>
        <div class="mb-4 px-3">
            <p class="px-2 text-sm font-bold mb-2 text-white">PRODUCTS</p>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2">
                    <path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
                </svg><span class="text-gray-300 font-semibold text-gray-500">Add Product</span>
            </div>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M15.396,2.292H4.604c-0.212,0-0.385,0.174-0.385,0.386v14.646c0,0.212,0.173,0.385,0.385,0.385h10.792c0.211,0,0.385-0.173,0.385-0.385V2.677C15.781,2.465,15.607,2.292,15.396,2.292 M15.01,16.938H4.99v-2.698h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.519,1.156-1.156s-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.321-1.089,0.771H4.99v-3.083h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.518,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V6.531h1.609C6.755,6.98,7.185,7.302,7.688,7.302c0.638,0,1.156-0.519,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V3.062h10.02V16.938z M7.302,13.854c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386s-0.173,0.385-0.385,0.385S7.302,14.066,7.302,13.854 M7.302,10c0-0.212,0.173-0.385,0.385-0.385S8.073,9.788,8.073,10s-0.173,0.385-0.385,0.385S7.302,10.212,7.302,10 M7.302,6.146c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386S7.899,6.531,7.688,6.531S7.302,6.358,7.302,6.146"></path>
                </svg><span class="text-gray-300 font-semibold text-gray-500">View Products</span>
            </div>
        </div>
        <div class="mb-4 px-3">
            <p class="px-2 text-sm font-bold mb-2 text-white">MISC</p>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M17.592,8.936l-6.531-6.534c-0.593-0.631-0.751-0.245-0.751,0.056l0.002,2.999L5.427,9.075H2.491c-0.839,0-0.162,0.901-0.311,0.752l3.683,3.678l-3.081,3.108c-0.17,0.171-0.17,0.449,0,0.62c0.169,0.17,0.448,0.17,0.618,0l3.098-3.093l3.675,3.685c-0.099-0.099,0.773,0.474,0.773-0.296v-2.965l3.601-4.872l2.734-0.005C17.73,9.688,18.326,9.669,17.592,8.936 M3.534,9.904h1.906l4.659,4.66v1.906L3.534,9.904z M10.522,13.717L6.287,9.48l4.325-3.124l3.088,3.124L10.522,13.717z M14.335,8.845l-3.177-3.177V3.762l5.083,5.083H14.335z"></path>
                </svg><span class="text-gray-300 font-semibold">Notices</span>
            </div>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M6.176,7.241V6.78c0-0.221-0.181-0.402-0.402-0.402c-0.221,0-0.403,0.181-0.403,0.402v0.461C4.79,7.416,4.365,7.955,4.365,8.591c0,0.636,0.424,1.175,1.006,1.35v3.278c0,0.222,0.182,0.402,0.403,0.402c0.222,0,0.402-0.181,0.402-0.402V9.941c0.582-0.175,1.006-0.714,1.006-1.35C7.183,7.955,6.758,7.416,6.176,7.241 M5.774,9.195c-0.332,0-0.604-0.272-0.604-0.604c0-0.332,0.272-0.604,0.604-0.604c0.332,0,0.604,0.272,0.604,0.604C6.377,8.923,6.105,9.195,5.774,9.195 M10.402,10.058V6.78c0-0.221-0.181-0.402-0.402-0.402c-0.222,0-0.402,0.181-0.402,0.402v3.278c-0.582,0.175-1.006,0.714-1.006,1.35c0,0.637,0.424,1.175,1.006,1.351v0.461c0,0.222,0.181,0.402,0.402,0.402c0.221,0,0.402-0.181,0.402-0.402v-0.461c0.582-0.176,1.006-0.714,1.006-1.351C11.408,10.772,10.984,10.233,10.402,10.058M10,12.013c-0.333,0-0.604-0.272-0.604-0.604S9.667,10.805,10,10.805c0.332,0,0.604,0.271,0.604,0.604S10.332,12.013,10,12.013M14.629,8.448V6.78c0-0.221-0.182-0.402-0.403-0.402c-0.221,0-0.402,0.181-0.402,0.402v1.668c-0.581,0.175-1.006,0.714-1.006,1.35c0,0.636,0.425,1.176,1.006,1.351v2.07c0,0.222,0.182,0.402,0.402,0.402c0.222,0,0.403-0.181,0.403-0.402v-2.07c0.581-0.175,1.006-0.715,1.006-1.351C15.635,9.163,15.21,8.624,14.629,8.448 M14.226,10.402c-0.331,0-0.604-0.272-0.604-0.604c0-0.332,0.272-0.604,0.604-0.604c0.332,0,0.604,0.272,0.604,0.604C14.83,10.13,14.558,10.402,14.226,10.402 M17.647,3.962H2.353c-0.221,0-0.402,0.181-0.402,0.402v11.27c0,0.222,0.181,0.402,0.402,0.402h15.295c0.222,0,0.402-0.181,0.402-0.402V4.365C18.05,4.144,17.869,3.962,17.647,3.962 M17.245,15.232H2.755V4.768h14.49V15.232z"></path>
                </svg><span class="text-gray-300 font-semibold">Controls</span>
            </div>
            <div class="w-full flex items-center text-gray-100 h-10 px-2 hover:bg-gray-800 rounded cursor-pointer">
                <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current mr-2 text-gray-500">
                    <path d="M17.498,11.697c-0.453-0.453-0.704-1.055-0.704-1.697c0-0.642,0.251-1.244,0.704-1.697c0.069-0.071,0.15-0.141,0.257-0.22c0.127-0.097,0.181-0.262,0.137-0.417c-0.164-0.558-0.388-1.093-0.662-1.597c-0.075-0.141-0.231-0.22-0.391-0.199c-0.13,0.02-0.238,0.027-0.336,0.027c-1.325,0-2.401-1.076-2.401-2.4c0-0.099,0.008-0.207,0.027-0.336c0.021-0.158-0.059-0.316-0.199-0.391c-0.503-0.274-1.039-0.498-1.597-0.662c-0.154-0.044-0.32,0.01-0.416,0.137c-0.079,0.106-0.148,0.188-0.22,0.257C11.244,2.956,10.643,3.207,10,3.207c-0.642,0-1.244-0.25-1.697-0.704c-0.071-0.069-0.141-0.15-0.22-0.257C7.987,2.119,7.821,2.065,7.667,2.109C7.109,2.275,6.571,2.497,6.07,2.771C5.929,2.846,5.85,3.004,5.871,3.162c0.02,0.129,0.027,0.237,0.027,0.336c0,1.325-1.076,2.4-2.401,2.4c-0.098,0-0.206-0.007-0.335-0.027C3.001,5.851,2.845,5.929,2.77,6.07C2.496,6.572,2.274,7.109,2.108,7.667c-0.044,0.154,0.01,0.32,0.137,0.417c0.106,0.079,0.187,0.148,0.256,0.22c0.938,0.936,0.938,2.458,0,3.394c-0.069,0.072-0.15,0.141-0.256,0.221c-0.127,0.096-0.181,0.262-0.137,0.416c0.166,0.557,0.388,1.096,0.662,1.596c0.075,0.143,0.231,0.221,0.392,0.199c0.129-0.02,0.237-0.027,0.335-0.027c1.325,0,2.401,1.076,2.401,2.402c0,0.098-0.007,0.205-0.027,0.334C5.85,16.996,5.929,17.154,6.07,17.23c0.501,0.273,1.04,0.496,1.597,0.66c0.154,0.047,0.32-0.008,0.417-0.137c0.079-0.105,0.148-0.186,0.22-0.256c0.454-0.453,1.055-0.703,1.697-0.703c0.643,0,1.244,0.25,1.697,0.703c0.071,0.07,0.141,0.15,0.22,0.256c0.073,0.098,0.188,0.152,0.307,0.152c0.036,0,0.073-0.004,0.109-0.016c0.558-0.164,1.096-0.387,1.597-0.66c0.141-0.076,0.22-0.234,0.199-0.393c-0.02-0.129-0.027-0.236-0.027-0.334c0-1.326,1.076-2.402,2.401-2.402c0.098,0,0.206,0.008,0.336,0.027c0.159,0.021,0.315-0.057,0.391-0.199c0.274-0.5,0.496-1.039,0.662-1.596c0.044-0.154-0.01-0.32-0.137-0.416C17.648,11.838,17.567,11.77,17.498,11.697 M16.671,13.334c-0.059-0.002-0.114-0.002-0.168-0.002c-1.749,0-3.173,1.422-3.173,3.172c0,0.053,0.002,0.109,0.004,0.166c-0.312,0.158-0.64,0.295-0.976,0.406c-0.039-0.045-0.077-0.086-0.115-0.123c-0.601-0.6-1.396-0.93-2.243-0.93s-1.643,0.33-2.243,0.93c-0.039,0.037-0.077,0.078-0.116,0.123c-0.336-0.111-0.664-0.248-0.976-0.406c0.002-0.057,0.004-0.113,0.004-0.166c0-1.75-1.423-3.172-3.172-3.172c-0.054,0-0.11,0-0.168,0.002c-0.158-0.312-0.293-0.639-0.405-0.975c0.044-0.039,0.085-0.078,0.124-0.115c1.236-1.236,1.236-3.25,0-4.486C3.009,7.719,2.969,7.68,2.924,7.642c0.112-0.336,0.247-0.664,0.405-0.976C3.387,6.668,3.443,6.67,3.497,6.67c1.75,0,3.172-1.423,3.172-3.172c0-0.054-0.002-0.11-0.004-0.168c0.312-0.158,0.64-0.293,0.976-0.405C7.68,2.969,7.719,3.01,7.757,3.048c0.6,0.6,1.396,0.93,2.243,0.93s1.643-0.33,2.243-0.93c0.038-0.039,0.076-0.079,0.115-0.123c0.336,0.112,0.663,0.247,0.976,0.405c-0.002,0.058-0.004,0.114-0.004,0.168c0,1.749,1.424,3.172,3.173,3.172c0.054,0,0.109-0.002,0.168-0.004c0.158,0.312,0.293,0.64,0.405,0.976c-0.045,0.038-0.086,0.077-0.124,0.116c-0.6,0.6-0.93,1.396-0.93,2.242c0,0.847,0.33,1.645,0.93,2.244c0.038,0.037,0.079,0.076,0.124,0.115C16.964,12.695,16.829,13.021,16.671,13.334 M10,5.417c-2.528,0-4.584,2.056-4.584,4.583c0,2.529,2.056,4.584,4.584,4.584s4.584-2.055,4.584-4.584C14.584,7.472,12.528,5.417,10,5.417 M10,13.812c-2.102,0-3.812-1.709-3.812-3.812c0-2.102,1.71-3.812,3.812-3.812c2.102,0,3.812,1.71,3.812,3.812C13.812,12.104,12.102,13.812,10,13.812"></path>
                </svg>
                <span class="text-gray-300 font-semibold">Settings</span>
            </div>
        </div>
    </div>
    <div id="main-content" class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen">
        <div class="sticky top-0 z-40">
            <div class="w-full h-16 px-10 bg-white shadow flex items-center justify-between">
                <div class="flx">
                    <div class="inline-block lg:hidden flex items-center mr-4">
                        <button class="hover:text-blue-500 hover:border-white focus:outline-none navbar-burger">
                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="fill: black;">
                                <title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
                        </button>
                    </div>
                    <nav aria-label="Breadcrumb" class="hidden-sm text-sm font-semibold">
                        <ol class="list-none p-0 inline-flex">
                            <li class="flex items-center text-gray-500">
                                <a href="#" class="text-gray-700">Home</a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fill-current w-3 h-3 mx-3 mt-1">
                                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="text-gray-600">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="flex items-center relative">
                    <a href="#" class="p-3 items-center text-gray-600 hover:text-gray-700 font-semibold text-sm leading-none flex lg:inline-flex border-r border-gray-200 px-3">
                        <i class="fas fa-globe mr-2"></i>
                        <span class="text-sm font-semibold mr-2 text-left flex-auto">Website</span> 
                        <svg class="h-4 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                    </a>
                    <a href="#" class="p-3 items-center text-gray-600 hover:text-gray-700 font-semibold text-sm leading-none flex lg:inline-flex px-3">
                    <i class="fas fa-cog mr-2"></i>
                       @guest
                            <a class="no-underline hover:underline text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span class="text-sm">Hi, {{ Auth::user()->name }}</span>
                        @endguest
                        <svg class="ml-2 h-4 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="p-10 bg-gray-200">
            <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
                <h2>Products</h2>
            </div>
            <div class="md:flex pt-3 pb-3 mb-3">
                <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
                    <div class="inline-flex">                            
                        <div class="relative mb-4 lg:mb-0">
                            <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                                <input id="docsearch" class="transition focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 bg-white py-2 pr-4 pl-4 h-10 block w-full appearance-none leading-normal ds-input rounded" type="text" placeholder="Search.." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
                                <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                                <span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; left: 0px; right: auto; display: none;">
                                    <div class="ds-dataset-1"></div>
                                </span>
                            </span>
                            <div class="pointer-events-none absolute inset-y-0 right-0 pl-4 pr-4 flex items-center">
                                <svg class="fill-current pointer-events-none text-gray-600 w-4 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative lg:mb-0">
                            <a href="#" class="ml-2 bg-gray-500 hover:bg-gray-600 outline-none focus:border-teal-900 rounded text-white py-3 px-2 inline-flex text-sm font-medium">
                                <i class="fas fa-filter"></i>
                                <span class="pointer-events-none inset-y-0 right-0 flex items-center pl-2 text-white">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                                </span>
                            </a>
                            
                        </div>

                    </div>
                </div>
                <div class="md:w-1/2 text-center md:text-right">
                    
                    <ul class="inline-flex mt-1">
                        <li class="mr-2">
                          <div class="inline-flex">
                        <div class="relative">
                            <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected=""></option>
                                <option>Enable Selected Products</option>
                                <option>Disable Selected Products</option>
                                <option>Restore Selected Products</option>
                                <option>Delete Selected Products</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                        </li>
                        <li class="mr-2">
                            <button class="block text-sm font-medium text-white bg-gray-500 hover:bg-gray-600 rounded py-1 px-4 h-8 text-center uppercase">
                                Add Product
                            </button>
                        </li>
                        <li>
                            <a href="#" class="block text-sm font-medium text-gray-600 py-2 px-2">
                            <i class="fas fa-cog fas fa-cog"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
                
            
            <div class="lg:mt-0 rounded shadow-lg overflow-hidden bg-white mb-6 ">

                <div class="overflow-hidden overflow-x-auto p-0 pt-0">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="text-sm text-gray-500 font-semibold  p-4 text-left"></th>
                                <th class="text-sm text-gray-500 font-semibold  p-4 text-left">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase" style="width: 50px;">
                                    ID
                                </th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Product Name</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Created At</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Order</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Options</th>
                            </tr>
                        </thead>
                        <tbody class="mb-4">
                            
                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                                    2
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">AU Test Product Price=0 POA main</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 text-center">2</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    3
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Test Ebay Product Listing Template</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">3</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    4
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Test new product on 30.05.2017 for testing the length issue and the & chr issue in ebay</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">4</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    5
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Qc ebay product with single variant & NO image</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">5</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                                    6
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">QC New product for ebay desc tab</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 text-center">6</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    5
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Qc ebay product with single variant & NO image</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">5</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody>

                        <tfoot>
                            <tr>
                                <td class="bg-gray-100 p-4 mt-4 text-left"></td>
                                <td class="bg-gray-100 p-4 mt-4 text-left">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                </td>
                                <td colspan="8" class="bg-gray-100 p-4 pt-2 pb-2 mt-4 text-sm text-left">
                                    <div class="flex flex-wrap">
                                        <div class="w-1/2 text-left self-center">
                                            <span class="text-sm font-bold">Showing 5 of 5 results</span>
                                        </div>

                                        <div class="w-1/2 text-right">
                                          <div class="inline-flex">
                                            <ul class="md:flex pl-0 list-none rounded mx-auto text-right">
                                                <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 ml-0 rounded-l hover:bg-gray-400">
                                                    <a href="#">
                                                        <i class="fas fa-angle-double-left"></i>
                                                    </a>
                                                </li>
                                                <li class="text-md inline-block py-1 px-3 bg-gray-200 border border-gray-400 text-gray-600 md:border-r-0">
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                    <a href="#">3</a>
                                                </li>
                                                <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white rounded-r hover:bg-gray-400">
                                                    <a href="#">
                                                        <i class="fas fa-angle-double-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                          </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection