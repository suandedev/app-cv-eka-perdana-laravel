<x-main>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Panen</h1>

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

        <form class="user" method="post" action="{{ route('panen.update', $panen->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input name="weight" type="text" class="form-control form-control-user"
                       id="weight"
                       value="{{ $panen->weight }}"
                       placeholder="masukan berat padi...">
            </div>
            <button class="btn btn-primary" type="submit">ubah</button>
            <a href="{{ route('panen.index') }}" class="btn btn-danger" type="submit">batal</a>
        </form>
    </div>
</x-main>
