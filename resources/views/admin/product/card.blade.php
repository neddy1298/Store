<div class="row sortable-card">
    @foreach ($products as $product)
    <div class="col-6 col-sm-4 col-lg-4">
        <div class="card
            @if($product->qty - $product->sold > 10)
            card-success
            @elseif($product->status == 'Trash')
            card-danger
            @elseif($product->qty - $product->sold == 0)
            card-info
            @elseif($product->qty - $product->sold <= 10)
            card-warning
            @endif">
            <div class="card-header">
                <h4>{{ $product->name }}</h4>
                <div class="card-header-action">
                    <form action="{{ route('products.trash', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <a data-collapse="#mycard-collapse-{{ $product->id }}" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-plus"></i></a>
                    </form>
                </div>
            </div>
            <div class="collapse hide" id="mycard-collapse-{{ $product->id }}">
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Views</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td>${{ $product->price }}</td>
                            <td>{{ ($product->qty - $product->sold).'/'.$product->qty }}</td>
                            <td>{{ $product->view }}</td>
                            <td>
                                @if ($product->status == 'Available')
                                <p class="badge badge-success">
                                    {{ $product->status }}</p>
                                @elseif($product->status == 'Trash')
                                <p class="badge badge-danger">
                                    {{ $product->status }}</p>
                                @else
                                <p class="badge badge-warning">
                                    {{ $product->status }}</p>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="chocolat-parent text-center">
                        <a href="{{ asset('asset') .'/'. $product->category.'/'. $product->img }}"
                            class="chocolat-image" title="{{ $product->name }}">
                            <div data-crop-image="285">
                                <img alt="image" src="{{ asset('asset') }}/{{ $product->category.'/'. $product->img }}"
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
