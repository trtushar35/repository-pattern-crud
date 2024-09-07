<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repository</title>
    <title>Bootstrap CDN Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div>
        <div name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Category Edit') }}
            </h2>
        </div>

        <body>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row w-100">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method('put')
                            <div class="mb-6">
                                <label class="block">
                                    <span class="text-gray-700">Category Name</span>
                                    <input type="text" name="name"
                                        class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                        placeholder="" value="{{ old('name', $category->name) }}" />
                                </label>
                                @error('name')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block">
                                    <span class="text-gray-700">Slug</span>
                                    <input type="text" name="slug"
                                        class="block w-full @error('slug') border-red-500 @enderror mt-1 rounded-md"
                                        placeholder="" value="{{ old('slug', $category->slug) }}" />
                                </label>
                                @error('slug')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit"
                                class="btn btn-success  rounded text-sm px-5 py-2.5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- bootstrap js cdn --}}
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>
        </body>

</html>
