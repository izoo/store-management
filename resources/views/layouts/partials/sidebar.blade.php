<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

	<a href="{{route('home')}}" class="logo">
		<span class="logo-lg">{{ Session::get('business.name') }}</span>
	</a>

    <!-- Sidebar Menu -->
       
<ul class="sidebar-menu tree" data-widget="tree">
<li><a href="http://127.0.0.1:8000/home"><i class="fa fas fa-tachometer-alt"></i> <span>Home</span></a></li>
<li class="treeview">
		          <a href="#">
					<i class="fa fas fa-users"></i> <span>User Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/users"><i class="fa fas fa-user"></i> <span>Users</span></a></li>
<li><a href="http://127.0.0.1:8000/roles"><i class="fa fas fa-briefcase"></i> <span>Roles</span></a></li>
<li><a href="http://127.0.0.1:8000/sales-commission-agents"><i class="fa fas fa-handshake"></i> <span>Sales Commission Agents</span></a></li>

			      </ul>
		      	</li>
<li class="treeview" id="tour_step4">
		          <a href="#">
					<i class="fa fas fa-address-book"></i> <span>Contacts</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/contacts?type=supplier"><i class="fa fas fa-star"></i> <span>Suppliers</span></a></li>
<li><a href="http://127.0.0.1:8000/contacts?type=customer"><i class="fa fas fa-star"></i> <span>Customers</span></a></li>
<li><a href="http://127.0.0.1:8000/customer-group"><i class="fa fas fa-users"></i> <span>Customer Groups</span></a></li>
<li><a href="http://127.0.0.1:8000/contacts/import"><i class="fa fas fa-download"></i> <span>Import Contacts</span></a></li>

			      </ul>
		      	</li>
<li class="treeview active" id="tour_step5">
		          <a href="#">
					<i class="fa fas fa-cubes"></i> <span>Products</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/products"><i class="fa fas fa-list"></i> <span>List Products</span></a></li>
<li><a href="http://127.0.0.1:8000/products/create"><i class="fa fas fa-plus-circle"></i> <span>Add Product</span></a></li>
<li style="display:none;" class="active"><a href="http://127.0.0.1:8000/labels/show"><i class="fa fas fa-barcode"></i> <span>Print Labels</span></a></li>
<li><a href="http://127.0.0.1:8000/variation-templates"><i class="fa fas fa-circle"></i> <span>Variations</span></a></li>
<li><a href="http://127.0.0.1:8000/import-products"><i class="fa fas fa-download"></i> <span>Import Products</span></a></li>
<li><a href="http://127.0.0.1:8000/import-opening-stock"><i class="fa fas fa-download"></i> <span>Import Opening Stock</span></a></li>
<li><a href="http://127.0.0.1:8000/selling-price-group"><i class="fa fas fa-circle"></i> <span>Selling Price Group</span></a></li>
<li><a href="http://127.0.0.1:8000/units"><i class="fa fas fa-balance-scale"></i> <span>Units</span></a></li>
<li><a href="http://127.0.0.1:8000/taxonomies?type=product"><i class="fa fas fa-tags"></i> <span>Categories</span></a></li>
<li><a href="http://127.0.0.1:8000/brands"><i class="fa fas fa-gem"></i> <span>Brands</span></a></li>
<li><a href="http://127.0.0.1:8000/warranties"><i class="fa fas fa-shield-alt"></i> <span>Warranties</span></a></li>

			      </ul>
		      	</li>
<li class="treeview" id="tour_step6">
		          <a href="#">
					<i class="fa fas fa-arrow-circle-down"></i> <span>Purchases</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/purchases"><i class="fa fas fa-list"></i> <span>List Purchases</span></a></li>
<li><a href="http://127.0.0.1:8000/purchases/create"><i class="fa fas fa-plus-circle"></i> <span>Add Purchase</span></a></li>
<li><a href="http://127.0.0.1:8000/purchase-return"><i class="fa fas fa-undo"></i> <span>List Purchase Return</span></a></li>

			      </ul>
		      	</li>
<li class="treeview" id="tour_step7">
		          <a href="#">
					<i class="fa fas fa-arrow-circle-up"></i> <span>Sell</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/sells"><i class="fa fas fa-list"></i> <span>All sales</span></a></li>
<li><a href="http://127.0.0.1:8000/sells/create"><i class="fa fas fa-plus-circle"></i> <span>Add Sale</span></a></li>
<li><a href="http://127.0.0.1:8000/pos"><i class="fa fas fa-list"></i> <span>List POS</span></a></li>
<li><a href="http://127.0.0.1:8000/pos/create"><i class="fa fas fa-plus-circle"></i> <span>POS</span></a></li>
<li><a href="http://127.0.0.1:8000/sells/drafts"><i class="fa fas fa-pen-square"></i> <span>List Drafts</span></a></li>
<li><a href="http://127.0.0.1:8000/sells/quotations"><i class="fa fas fa-pen-square"></i> <span>List quotations</span></a></li>
<li><a href="http://127.0.0.1:8000/sell-return"><i class="fa fas fa-undo"></i> <span>List Sell Return</span></a></li>
<li><a href="http://127.0.0.1:8000/shipments"><i class="fa fas fa-truck"></i> <span>Shipments</span></a></li>
<li><a href="http://127.0.0.1:8000/discount"><i class="fa fas fa-percent"></i> <span>Discounts</span></a></li>
<li><a href="http://127.0.0.1:8000/import-sales"><i class="fa fas fa-file-import"></i> <span>Import Sales</span></a></li>

			      </ul>
		      	</li>
<li class="treeview">
		          <a href="#">
					<i class="fa fas fa-truck"></i> <span>Stock Transfers</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/stock-transfers"><i class="fa fas fa-list"></i> <span>List Stock Transfers</span></a></li>
<li><a href="http://127.0.0.1:8000/stock-transfers/create"><i class="fa fas fa-plus-circle"></i> <span>Add Stock Transfer</span></a></li>

			      </ul>
		      	</li>
<li class="treeview">
		          <a href="#">
					<i class="fa fas fa-database"></i> <span>Stock Adjustment</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/stock-adjustments"><i class="fa fas fa-list"></i> <span>List Stock Adjustments</span></a></li>
<li><a href="http://127.0.0.1:8000/stock-adjustments/create"><i class="fa fas fa-plus-circle"></i> <span>Add Stock Adjustment</span></a></li>

			      </ul>
		      	</li>
<li class="treeview">
		          <a href="#">
					<i class="fa fas fa-minus-circle"></i> <span>Expenses</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/expenses"><i class="fa fas fa-list"></i> <span>List Expenses</span></a></li>
<li><a href="http://127.0.0.1:8000/expenses/create"><i class="fa fas fa-plus-circle"></i> <span>Add Expense</span></a></li>
<li><a href="http://127.0.0.1:8000/expense-categories"><i class="fa fas fa-circle"></i> <span>Expense Categories</span></a></li>

			      </ul>
		      	</li>
<li class="treeview" id="tour_step8">
		          <a href="#">
					<i class="fa fas fa-chart-bar"></i> <span>Reports</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/reports/profit-loss"><i class="fa fas fa-file-invoice-dollar"></i> <span>Profit / Loss Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/purchase-sell"><i class="fa fas fa-exchange-alt"></i> <span>Purchase &amp; Sale</span></a></li>
<li style="display:none;"><a href="http://127.0.0.1:8000/reports/tax-report"><i class="fa fas fa-percent"></i> <span>Tax Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/customer-supplier"><i class="fa fas fa-address-book"></i> <span>Supplier &amp; Customer Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/customer-group"><i class="fa fas fa-users"></i> <span>Customer Groups Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/stock-report"><i class="fa fas fa-hourglass-half"></i> <span>Stock Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/stock-adjustment-report"><i class="fa fas fa-sliders-h"></i> <span>Stock Adjustment Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/trending-products"><i class="fa fas fa-chart-line"></i> <span>Trending Products</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/items-report"><i class="fa fas fa-tasks"></i> <span>Items Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/product-purchase-report"><i class="fa fas fa-arrow-circle-down"></i> <span>Product Purchase Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/product-sell-report"><i class="fa fas fa-arrow-circle-up"></i> <span>Product Sell Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/purchase-payment-report"><i class="fa fas fa-search-dollar"></i> <span>Purchase Payment Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/sell-payment-report"><i class="fa fas fa-search-dollar"></i> <span>Sell Payment Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/expense-report"><i class="fa fas fa-search-minus"></i> <span>Expense Report</span></a></li>
<li><a href="http://127.0.0.1:8000/reports/register-report"><i class="fa fas fa-briefcase"></i> <span>Register Report</span></a></li>
<li  style="display:none;"><a href="http://127.0.0.1:8000/reports/sales-representative-report"><i class="fa fas fa-user"></i> <span>Sales Representative Report</span></a></li>

			      </ul>
		      	</li>
<li style="display:none;"><a href="http://127.0.0.1:8000/notification-templates"><i class="fa fas fa-envelope"></i> <span>Notification Templates</span></a></li>
<li class="treeview" id="tour_step3">
		          <a href="#">
					<i class="fa fas fa-cog"></i> <span>Settings</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	<li><a href="http://127.0.0.1:8000/business/settings" id="tour_step2"><i class="fa fas fa-cogs"></i> <span>Business Settings</span></a></li>
<li><a href="http://127.0.0.1:8000/business-location"><i class="fa fas fa-map-marker"></i> <span>Business Locations</span></a></li>
<li><a href="http://127.0.0.1:8000/invoice-schemes"><i class="fa fas fa-file"></i> <span>Invoice Settings</span></a></li>
<li><a href="http://127.0.0.1:8000/barcodes"><i class="fa fas fa-barcode"></i> <span>Barcode Settings</span></a></li>
<li><a href="http://127.0.0.1:8000/printers"><i class="fa fas fa-share-alt"></i> <span>Receipt Printers</span></a></li>
<li><a href="http://127.0.0.1:8000/tax-rates"><i class="fa fas fa-bolt"></i> <span>Tax Rates</span></a></li>

			      </ul>
		      	</li>

</ul>
    

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
