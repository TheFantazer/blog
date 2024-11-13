<x-form action="{{ route('blog') }}" method="get">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="search" value="{{request('search')}}" placeholder="{{__('Search')}}"/>
            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-select name="category_id " value="{{ request('category_id') }}" :options="[null => __('All categories'), 1 => __('First category'), 2 => __('Second category')]"/>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-button type="submit" class="w-100">
                    {{__('Apply')}}
                </x-button>
            </div>
        </div>
    </div>
</x-form>
