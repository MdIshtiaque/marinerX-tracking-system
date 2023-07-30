@foreach($orders as $order)
    <div id="popup-modal-{{ $order->id }}" tabindex="-1"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-medium text-gray-900">Change Your Status Here</h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                            data-modal-hide="popup-modal-{{ $order->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('edit.status', optional($order->status->first())->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="flex flex-col gap-5 py-5 px-5 md:px-9">
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" id="title" name="title" value="{{ optional($order->status->first())->title }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5"
                                   placeholder="Status Title" required/>
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <input type="text" id="description" name="description" value="{{ optional($order->status->first())->description }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5"
                                   placeholder="Description" required/>
                        </div>
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Date</label>
                            <input type="date" id="status_time_date" name="status_time_date" value="{{ \Carbon\Carbon::parse(optional($order->status->first())->status_time_date)->toDateString() }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5"
                                   placeholder="Select date" required/>
                        </div>
                        <input type="text" value="{{ $order->id }}" name="order_id" hidden>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="popup-modal-{{ $order->id }}" type="submit"
                                class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
{{--<script>--}}
{{--    let isFormSubmitting = false;--}}

{{--    function onSubmitForm(button) {--}}
{{--        if (!isFormSubmitting) {--}}
{{--            isFormSubmitting = true;--}}
{{--            button.innerHTML = 'Saving...'; // Optionally, show a loading text on the button--}}
{{--            document.getElementById("statusForm").submit();--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

