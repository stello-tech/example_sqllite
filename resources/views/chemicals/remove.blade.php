<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Chemical</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        danger: {
                            600: '#dc2626',  // red-600
                            700: '#b91c1c',  // red-700
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
            <!-- Card header with danger color -->
            <div class="bg-danger-600 px-6 py-4">
                <h2 class="text-xl font-semibold text-white">Remove Chemical</h2>
            </div>
            
            <!-- Card body -->
            <div class="p-6">
                <form action="{{ route('chemicals.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="space-y-5">
                        <!-- Barcode field -->
                        <div>
                            <label for="barcode" class="block text-sm font-medium text-gray-800 mb-1">Barcode</label>
                            <input type="text" name="barcode" id="barcode" required 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-danger-600 focus:border-danger-600">
                        </div>
                        
                        <!-- Submit button -->
                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-danger-600 hover:bg-danger-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-danger-600">
                                Remove Chemical
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>