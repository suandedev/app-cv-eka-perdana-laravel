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

        <form class="user" method="post" action="{{ route('petani.update', $petani->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input name="petani_name" type="text" class="form-control form-control-user"
                       id="petani_name"
                       value="{{ $petani->petani_name }}"
                       placeholder="masukan nama petani...">
            </div>
            <button class="btn btn-primary" type="submit">ubah</button>
            <a href="{{route('petani.index')}}" class="btn btn-danger" type="submit">batal</a>
        </form>
    </div>
</x-main>
