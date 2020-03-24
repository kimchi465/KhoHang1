<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tạo vai trò
        $role_quan_tri = Role::create(['name' => 'quan_tri']);
        $role_user = Role::create(['name' => 'nguoi_dung']);

        //Tạo quyền
        $permission_xem_san_pham = Permission::create(['name' => 'xem_san_pham']);
        $permission_them_san_pham = Permission::create(['name' => 'them_san_pham']);
        $permission_sua_san_pham = Permission::create(['name' => 'sua_san_pham']);
        $permission_xoa_san_pham = Permission::create(['name' => 'xoa_san_pham']);
        $permission_xuatdulieu_excel_san_pham = Permission::create(['name' => 'xuatdulieu_excel_san_pham']);
        $permission_xuatdulieu_pdf_san_pham = Permission::create(['name' => 'xuatdulieu_pdf_san_pham']);
        $permission_indulieu_san_pham = Permission::create(['name' => 'indulieu_san_pham']);
        $permission_quanly_kho = Permission::create(['name' => 'quanly_kho']);

        //Cấp quyền cho vai trò
        $role_quan_tri->givePermissionTo($permission_xem_san_pham);
        $role_quan_tri->givePermissionTo($permission_them_san_pham);
        $role_quan_tri->givePermissionTo($permission_sua_san_pham);
        $role_quan_tri->givePermissionTo($permission_xoa_san_pham);
        $role_quan_tri->givePermissionTo($permission_xuatdulieu_excel_san_pham);
        $role_quan_tri->givePermissionTo($permission_xuatdulieu_pdf_san_pham);
        $role_quan_tri->givePermissionTo($permission_indulieu_san_pham);
        $role_quan_tri->givePermissionTo($permission_quanly_kho);

        $role_user->givePermissionTo($permission_xem_san_pham);
        $role_user->givePermissionTo($permission_xuatdulieu_excel_san_pham);
        $role_user->givePermissionTo($permission_xuatdulieu_pdf_san_pham);
        $role_user->givePermissionTo($permission_indulieu_san_pham);
    }
}
