<x-main>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ubah Jenis Padi</h1>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="user" method="post" action="{{ route('kind.update', $rice_kind->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input name="rice_kind" type="text" class="form-control form-control-user"
                       id="weight"
                       value="{{ $rice_kind->rice_kind }}"
                       placeholder="masukan jenis padi...">
            </div>
            <button class="btn btn-primary" type="submit">simpan</button>
            <a href="{{ route('kind.index') }}" class="btn btn-warning" type="submit">batal</a>
        </form>
    </div>
</x-main>
