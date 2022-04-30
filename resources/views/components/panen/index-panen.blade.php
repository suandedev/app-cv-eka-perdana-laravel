<x-main>


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Panen</h1>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
    @endif

    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Panen</h6>
                <a href="{{ route('panen.create') }}" class="btn btn-sm btn-primary mt-4">
                    <i class="fas fa-plus"></i> Baru
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Petani</th>
                            <td>tangal</td>
                            <th>aksi</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Petani</th>
                            <td>tangal</td>
                            <th>aksi</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($panens as $panen)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $panen->weight }}</td>
                                <td>{{ $panen->created_at }}</td>
                                <td>
                                    <a href="{{route('panen.edit', $panen->id)}}" class="btn btn-sm btn-success"><i
                                            class="fas fa-eye"></i> detail</a>
                                    <form action="{{route('panen.destroy', $panen->id)}}" method="post"
                                          class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('data akan dikapus?')"><i class="fas fa-trash"></i> delete</button></form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</x-main>
