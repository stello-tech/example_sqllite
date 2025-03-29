<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chemical</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        warning: {
                            500: '#eab308',  // yellow-500
                            600: '#ca8a04',  // yellow-600
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
            <!-- Card header with warning color -->
            <div class="bg-warning-500 px-6 py-4">
                <h2 class="text-xl font-semibold text-white">Edit Chemical</h2>
            </div>
            
            <!-- Card body -->
            <div class="p-6">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-5">
                        <!-- Barcode field -->
                        <div>
                            <label for="barcode" class="block text-sm font-medium text-gray-800 mb-1">Barcode</label>
                            <input type="text" name="barcode" id="barcode" value="MRUC0001BU" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-warning-500 focus:border-warning-500">
                        </div>
                        
                        <!-- CAS Number field -->
                        <div>
                            <label for="cas" class="block text-sm font-medium text-gray-800 mb-1">CAS Number</label>
                            <input type="text" name="cas" id="cas" value="7647-14-5" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-warning-500 focus:border-warning-500">
                        </div>
                        
                        <!-- Submit button -->
                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-warning-500 hover:bg-warning-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-warning-500">
                                Update Chemical
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>