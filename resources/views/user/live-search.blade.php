<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRUG_STORE loading</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    @livewire('nav')

    <h2 class="text-red-500 text-3xl"> OUR DRUG STORE</h2>
    
    <input  class="text-blue-800 text-3xl"type="text" id="search" placeholder="Search products...">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        <!-- Live search results will be displayed here -->
    </div>
    <!-- ... Your HTML code ... -->

<script>
    $(document).ready(function(){
        $('#search').on('keyup', function(){
            var query = $(this).val();

            $.ajax({
                url: '{{ route('live-search.search') }}',
                method: 'get',
                data: {query: query},
                success: function(data){
                    var gridContainer = $('.grid');
                    gridContainer.empty();

                    $.each(data, function(index, item){
                        var imageUrl = '/images/' + item.image; // Adjust the path based on your actual structure
                        var gridItem = `
                            <div class="p-4 border border-red-400">
                                <p class="text-lg font-semibold">${item.name}</p>
                                <p class="text-gray-600">${item.description}</p>
                                <p class="text-red-500">${item.price}</p>
                                <img src="${imageUrl}" alt="${item.name}" class="w-full h-40 object-cover mt-4">
                            </div>
                        `;
                        gridContainer.append(gridItem);
                    });
                }
            });
        });
    });
</script>

</body>
</html>