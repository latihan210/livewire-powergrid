<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JpbAreaTableSeeder::class);
        $this->call(JpbAutoRoTableSeeder::class);
        $this->call(JpbAutoRoOutTableSeeder::class);
        $this->call(JpbBanksTableSeeder::class);
        $this->call(JpbBonusTableSeeder::class);
        $this->call(JpbBonusGenerationRefsTableSeeder::class);
        $this->call(JpbBonusLevelRefsTableSeeder::class);
        $this->call(JpbBonusMatchingRefsTableSeeder::class);
        $this->call(JpbCartTableSeeder::class);
        $this->call(JpbCountryTableSeeder::class);
        $this->call(JpbDistrictTableSeeder::class);
        $this->call(JpbEproductTableSeeder::class);
        $this->call(JpbEwalletTableSeeder::class);
        $this->call(JpbEwalletTransferTableSeeder::class);
        $this->call(JpbMemberTableSeeder::class);
        $this->call(JpbMemberConfirmTableSeeder::class);
        $this->call(JpbMemberOmzetTableSeeder::class);
        $this->call(JpbMemberPointTableSeeder::class);
        $this->call(JpbMemberReportTableSeeder::class);
        $this->call(JpbNewsTableSeeder::class);
        $this->call(JpbNotificationTableSeeder::class);
        $this->call(JpbOptionsTableSeeder::class);
        $this->call(JpbPackageTableSeeder::class);
        $this->call(JpbPairingPointTableSeeder::class);
        $this->call(JpbPairingQualifiedTableSeeder::class);
        $this->call(JpbPinTableSeeder::class);
        $this->call(JpbPinTransferTableSeeder::class);
        $this->call(JpbProductTableSeeder::class);
        $this->call(JpbProductAreaFeeTableSeeder::class);
        $this->call(JpbProductPackageTableSeeder::class);
        $this->call(JpbProductPackageItemTableSeeder::class);
        $this->call(JpbProductStockTableSeeder::class);
        $this->call(JpbProductStockInTableSeeder::class);
        $this->call(JpbProductStockOpnameTableSeeder::class);
        $this->call(JpbProductStockOutTableSeeder::class);
        $this->call(JpbProductStockistTableSeeder::class);
        $this->call(JpbProductStockistStockOpnameTableSeeder::class);
        $this->call(JpbProductVarianTableSeeder::class);
        $this->call(JpbProvinceTableSeeder::class);
        $this->call(JpbPurchaseOrderTableSeeder::class);
        $this->call(JpbPurchaseOrderDetailTableSeeder::class);
        $this->call(JpbRajaongkirTableSeeder::class);
        $this->call(JpbRanksTableSeeder::class);
        $this->call(JpbRewardTableSeeder::class);
        $this->call(JpbRewardConfigTableSeeder::class);
        $this->call(JpbRewardPointTableSeeder::class);
        $this->call(JpbRoTableSeeder::class);
        $this->call(JpbRoPointMonthlyTableSeeder::class);
        $this->call(JpbShopOrderTableSeeder::class);
        $this->call(JpbShopOrderDetailTableSeeder::class);
        $this->call(JpbStaffTableSeeder::class);
        $this->call(JpbSubdistrictTableSeeder::class);
        $this->call(JpbSupplierTableSeeder::class);
        $this->call(JpbUpgradeTableSeeder::class);
        $this->call(JpbVideoTableSeeder::class);
        $this->call(JpbVideoProgressTableSeeder::class);
        $this->call(JpbWithdrawTableSeeder::class);
        $this->call(UserFromMemberSeeder::class);
    }
}
