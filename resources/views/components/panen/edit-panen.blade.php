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
                <select name="petani_id" class="custom-select custom-select-sm">
                    <option selected value="{{ old('petani_id') }}">--pilih petani--</option>
                    @foreach($petanis as $petani)
                        <option value="{{$petani->id}}" {{ ($petani->id = $panen->petani_id) ? 'selected="selected"' : '' }}>{{$petani->petani_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <select name="rice_kind" class="custom-select custom-select-sm">
                        <option selected value="{{ old('rice_kind') }}">--pilih jenis padi--</option>
                    @foreach($rice_kinds as $rice_kind)
                            <option value="{{ $rice_kind->id }}" {{ ($rice_kind->id = $panen->rice_kind_id) ? 'selected="selected"' : '' }}>{{$rice_kind->rice_kind}}</option>
                        @endforeach
                    </select>
                </div>
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
