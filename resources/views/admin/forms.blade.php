@extends('layouts.blank')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
        
    <div class="lg:mt-0 rounded shadow bg-white mb-6 ">
        <div class="flex border-b border-grey-light p-4 pt-2 pb-2 font-medium">
            <div class="w-1/2 self-center">
                <h2 class="uppercase pull-right pr-4">Edit Pages</h2>
            </div>
            <div class="w-1/2 text-right">
                <div class="inline-flex">
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-r-0 border-white-400 font-normal">
                        Page
                    </a>
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-gray-400 font-normal">
                        Section
                    </a>
                </div>
            </div>
        </div>
        
        <div class="flex flex-wrap pt-4">
            
            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="warehouses">
                    Warehouses <span class="text-red-500 text-xs italic">*</span>
                </label> 
                <input class="rounded-sm appearance-none block w-full text-gray-700 bg-gray-100 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="warehouses">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="excerpt">
                    Excerpt / Short Description
                </label> 
                <input class="rounded-sm appearance-none block w-full text-gray-700 bg-gray-100 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="excerpt">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="title">
                    Title <span class="text-red-500 text-xs italic">*</span>
                </label> 
                <input class=" rounded-sm appearance-none block w-full text-gray-700 bg-gray-100 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="title">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="slug">
                    Slug <span class="text-red-500 text-xs italic">*</span>
                </label> 
                <input class="rounded-sm appearance-none block w-full text-gray-700 bg-gray-100 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="slug">
            </div>

            <div class="w-full px-4">
                <form method="post" class="w-full">
                    <label class="block tracking-wide text-gray-700 mb-5 font-medium" for="mytextarea">
                        Content <span class="text-red-500 text-xs italic">*</span>
                    </label>
                    <div id="mceu_11" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px;"><div id="mceu_11-body" class="mce-container-body mce-stack-layout"><div id="mceu_12" class="mce-container mce-menubar mce-toolbar mce-stack-layout-item mce-first" role="menubar" style="border-width: 0px 0px 1px;"><div id="mceu_12-body" class="mce-container-body mce-flow-layout"><div id="mceu_13" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-first mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_13" role="menuitem" aria-haspopup="true"><button id="mceu_13-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">File</span> <i class="mce-caret"></i></button></div><div id="mceu_14" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_14" role="menuitem" aria-haspopup="true"><button id="mceu_14-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Edit</span> <i class="mce-caret"></i></button></div><div id="mceu_15" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_15" role="menuitem" aria-haspopup="true"><button id="mceu_15-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">View</span> <i class="mce-caret"></i></button></div><div id="mceu_16" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_16" role="menuitem" aria-haspopup="true"><button id="mceu_16-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_17" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_17-body" class="mce-container-body mce-stack-layout"><div id="mceu_18" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar"><div id="mceu_18-body" class="mce-container-body mce-flow-layout"><div id="mceu_19" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group"><div id="mceu_19-body"><div id="mceu_0" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mceu_1" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" aria-labelledby="mceu_1" role="button" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div><div id="mceu_20" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_20-body"><div id="mceu_2" class="mce-widget mce-btn mce-menubtn mce-first mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_2" role="button" aria-haspopup="true"><button id="mceu_2-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Formats</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_21" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_21-body"><div id="mceu_3" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_3" role="button" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_4" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_4" role="button" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mceu_22" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_22-body"><div id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_5" role="button" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mceu_6" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_6" role="button" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_7" role="button" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mceu_8" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_8" role="button" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mceu_23" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_23-body"><div id="mceu_9" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_9" role="button" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_10" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_10" role="button" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div id="mceu_24" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group"><div id="mceu_24-body"></div></div></div></div></div></div><div id="mceu_25" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="mytextarea_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" src="javascript:&quot;&quot;" style="width: 100%; height: 100px; display: block;"></iframe></div><div id="mceu_26" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_26-body" class="mce-container-body mce-flow-layout"><div id="mceu_27" class="mce-path mce-flow-layout-item mce-first"><div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_27-0" aria-level="1">p</div></div><div id="mceu_28" class="mce-flow-layout-item mce-last mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea id="mytextarea" aria-hidden="true" style="display: none;">Hello, World!</textarea>
                </form>
            </div>

            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="meta">
                    Meta Title
                </label>
                <input class="rounded-sm appearance-none block w-full text-gray-700 bg-gray-100 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="meta">
            </div>
            
            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="description">
                    Meta Description
                </label>
                <input class="rounded-sm appearance-none block w-full text-gray-700 bg-gray-100 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="description">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium font-medium" for="keywords">
                    Meta Keywords
                </label>
                <input class="rounded-sm appearance-none block w-full bg-grey-200 bg-gray-100 text-gray-700 border border-gray-400 py-2 px-3 md:mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" id="keywords">
            </div>
            
            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-700 mb-2 font-medium" for="status">
                    Status <span class="text-red-500 text-xs italic">*</span>
                </label>
                <div class="relative">
                    <select class="rounded-sm w-full appearance-none border text-gray-700 bg-gray-100 border border-gray-400 h-10 px-3 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option>Enabled</option>
                        <option>Disabled</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full mt-4 p-4 bg-gray-200">
                <button class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                    Publish
                </button>
                <a href="#" class="font-medium outline-none hover:bg-gray-300 focus:border-gray-500 text-gray-800 border border-solid bg-white py-1 px-8 rounded-sm inline-flex">Cancel</a>
            </div>
            
        </div>

    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection