<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Chemical</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            600: '#4f46e5',  // indigo-600
                            700: '#4338ca',  // indigo-700
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Centered container -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <!-- Card container with enhanced contrast -->
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
            <!-- Card header with accent color -->
            <div class="bg-primary-600 px-6 py-4">
                <h2 class="text-xl font-semibold text-white">Add New Chemical</h2>
            </div>
            
            <!-- Card body -->
            <div class="p-6">
                <form action="{{ route('chemicals.store') }}" method="POST">
                    @csrf
                    <div class="space-y-5">
                        <!-- Barcode field -->
                        <div>
                            <label for="barcode" class="block text-sm font-medium text-gray-800 mb-1">Barcode</label>
                            <input type="text" name="barcode" id="barcode" required 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-primary-600">
                        </div>
                        
                        <!-- CAS Number field -->
                        <div>
                            <label for="cas" class="block text-sm font-medium text-gray-800 mb-1">CAS Number</label>
                            <input type="text" name="cas" id="cas" required 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-primary-600">
                        </div>
                        
                        <!-- Submit button -->
                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">
                                Add Chemical
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>