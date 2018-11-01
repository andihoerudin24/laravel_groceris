<ul class="nav">
        <li class="nav-item active">
            <a href="{{ route('dashboard') }}">
                <i class="la la-dashboard"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item active">
            <a href="{{ route('cetak') }}">
                <i class="la la-dashboard"></i>
                <p>
                    print report
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.index') }}">
                <i class="la la-table"></i>
                <p>Categories</p>
                <span class="badge badge-count"></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.index') }}">
                <i class="la la-keyboard-o"></i>
                <p>Products</p>
                <span class="badge badge-count"></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('transaction.index') }}">
                <i class="la la-th"></i>
                <p>Transactions Buyer</p>
                <span class="badge badge-count"></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('buyer.index') }}">
                <i class="la la-th"></i>
                <p>Buyer</p>
                <span class="badge badge-count"></span>
            </a>
        </li>
    </ul>