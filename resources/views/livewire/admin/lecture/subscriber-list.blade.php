<div>
    <x-subscribers-heading-section title="بەشداربووان" isGeneral="false"/>
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text" placeholder="Search for anything ...">
        </div>
    </div>
    <x-admin-list-tile :users=" $users "/>
</div>
