@if (Session::has("Cart") != null)

    <div id="change-item-cart">
        <div class="select-items">
            <table>
                <tbody>
                    @foreach (Session::get('Cart')->products as $item)
                        <tr>
                        <td class="si-pic"><img width="60px;" src="assets/img/products/{{$item['productInfo']->img}}" alt=""></td>
                            <td class="si-text">
                                <div class="product-selected">
                                    <p>{{ number_format($item['productInfo']->price) }}đ x {{ $item['quanty'] }}</p>
                                <h6>{{$item['productInfo']->name}}</h6>
                                </div>
                            </td>
                            <td class="si-close">
                            <i class="ti-close" data-id="{{$item['productInfo']->id}}" ></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>total:</span>
            <h5>{{ number_format(Session::get('Cart')->totalPrice) }}đ</h5>
            <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
        </div>
    </div>
@endif
