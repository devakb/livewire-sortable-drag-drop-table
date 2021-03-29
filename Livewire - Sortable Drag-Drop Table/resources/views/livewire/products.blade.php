<div>

    <div class="alert alert-info">
        Table with ability to drag-drop rows and reorder their positions in that way.
    </div>
    <table class="table">
       <thead>
          <tr>
              <th>

              </th>
             <th class="w-25">
                Name
             </th>
             <th class="w-25">
                Price
             </th>
             <th class="w-25">
                Description
             </th>
             <th class="w-25">
                Category
             </th>
          </tr>
       </thead>
       <tbody wire:sortable="updateProductsOrder">

          @forelse($products as $product)
              <tr wire:sortable.item="{{ $product->id }}" wire:key="task-{{ $product->id }}" >
                <td wire:sortable.handle>
                    <i class="fa fa-bars text-muted" style="cursor: move;"></i>
                </td>
                  <td>{{ $product->product_name }}</td>
                  <td>
                     ₹
                      {{ $product->product_price }}
                  </td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->category->category_name }}</td>
              </tr>
          @empty
              <tr>
                  <td class="text-center text-muted small" colspan="100%">
                      No Products Found
                  </td>
              </tr>
          @endforelse

       </tbody>
    </table>

 </div>
