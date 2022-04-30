<x-main>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Petani</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="user" method="post" action="{{ route('petani.store') }}">
            @csrf
            <div class="form-group">
                <input name="petani_name" type="text" class="form-control form-control-user"
                       id="petani_name"
                       placeholder="masukan nama petani...">
            </div>
            <button class="btn btn-primary" type="submit">simpan</button>
        </form>
    </div>
</x-main>
