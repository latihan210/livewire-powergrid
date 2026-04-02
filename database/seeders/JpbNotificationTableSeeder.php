<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbNotificationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_notification')->delete();
        
        \DB::table('jpb_notification')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notification Registration for New Member Non Active',
                'slug' => 'notification-new-member',
            'title' => 'Pendaftaran Member Baru (belum aktif--belum membayar paket)',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Selamat Bergabung...</strong></p>
			</td>
		</tr>
		<tr>
			<td>Terima kasih telah mendaftarkan diri Anda pada&nbsp;<strong>{company_name}.</strong></td>
		</tr>
		<tr>
			<td>Akun anda belum aktif. Anda dapat login untuk melihat status akun anda:</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="50%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Akun Anda</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Nama</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{name}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Password</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{password}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="padding: 10px 0px;background-color:#ffffff"><a href="{url_login}" style="background-color:#02b399; color:#ffffff; border-radius:8px; height:48px; line-height:48px; display:inline-block; font-family:Helvetica,Arial,sans-serif; font-weight:bold; font-size:16px; width:100%; text-align:center; text-decoration:none" target="_blank">Log In </a></td>
		</tr>
		<tr>
			<td style="padding: 0px 0px 30px; text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">
			<table border="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr>
						<td style="padding: 0px 0px 30px; text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Silahkan anda klik &quot;Log In&quot; untuk masuk ke akun anda</td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">&nbsp;</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-14 16:25:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Notification Registration for New Member Active',
                'slug' => 'notification-new-member-active',
                'title' => 'Akun Member Sudah AKTIF !',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Selamat Bergabung bersama PT Jagad Pesona Buana&nbsp;!</strong></p>
			</td>
		</tr>
		<tr>
			<td>Akun anda sudah AKTIF, sekarang anda bisa akses ke&nbsp;member area of <strong>{company_name}.</strong></td>
		</tr>
		<tr>
			<td>Berikut informasi Akun Anda:</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="50%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Akses akun Anda</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Nama</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{name}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Password</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{password}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="padding: 10px 0px;background-color:#ffffff"><a href="{url_login}" style="background-color:#222; color:#ffffff; border-radius:8px; height:48px; line-height:48px; display:inline-block; font-family:Helvetica,Arial,sans-serif; font-weight:bold; font-size:16px; width:100%; text-align:center; text-decoration:none" target="_blank">Log In </a></td>
		</tr>
		<tr>
			<td style="padding: 0px 0px 30px; text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Silahkan KLIK Log In untuk masuk ke akun anda</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Bersama JPB, kita raih kehidupan yang lebih sehat, lebih berkualitas dan lebih sejahtera</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px 0px;">Regards</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-16 20:30:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Notification Registration for Sponsor',
                'slug' => 'notification-sponsor',
                'title' => 'Informasi Member Baru',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Halo {member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Selamat, Anda mendapatkan Member Baru pada Jaringan anda.</td>
		</tr>
		<tr>
			<td>Segera follow up team anda dan bantu mereka memiliki kehidupan yang lebih baik.</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px 0px;">Informasi Member Baru anda:&nbsp;</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Name</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{name}</p>
												</td>
											</tr>
										</tbody>
									</table>

                                    <table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Phone</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{phone}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-16 20:29:55',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Notification Invoice',
                'slug' => 'notification-invoice',
                'title' => 'Invoice Information',
                'content' => '<table cellpadding="0" cellspacing="0" style="background-color:transparent; border-spacing:0; margin:0; max-width:100%; width:100%">
	<tbody>
		<tr>
			<td>
			<p style="font-size:13px;margin-top: 10px;color:#212121">Halo <strong>{member}</strong>,</p>
			</td>
		</tr>
		<tr style="margin:0;padding:0">
			<td style="margin:0;padding:0">
			<p style="line-height:1.4;color:#212121;font-weight:500;font-size:14px;margin-top: 20px;margin-bottom: 0;padding:0;">Terima kasih sudah berbelanja di <strong>{company_name}</strong>. Sebagai konfirmasi, berikut informasi data pesanan anda:</p>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="background:#f3f4f5; border-radius:8px; margin:20px 0; padding:20px; width:100%">
	<tbody>
		<tr>
			<td style="padding:20px;">
			<table cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="40%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Waktu Pemesanan</p>
						</td>
						<td style="padding:0 0 15px 0" width="60%">
						<p style="margin:0;font-weight:bold;font-size:14px;color:rgba(49,53,59,0.96)">{date_order}</p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">No. Invoice</p>
						</td>
						<td style="padding:0 0 15px 0" width="70%">
						<p style="margin:0;color:#02b399;font-size:14px"><strong>{invoice}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Total Bayar</p>
						</td>
						<td style="padding:0 0 15px 0" width="70%">
						<p style="margin:0;color:#fa591d;font-size:14px"><strong>{total_payment}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 20px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Metode Pembayaran</p>
						</td>
						<td style="padding:0 0 20px 0" width="70%">
						<p style="margin:0;color:rgba(49,53,59,0.96);font-weight:bold;font-size:14px"><strong>{payment_method}</strong></p>
						</td>
					</tr>
					{account_bank}
				</tbody>
			</table>
			</td>
		</tr>
		{order_expiry_date}
	</tbody>
</table>

<p>{info_transfer} {info_stockist}</p>

<table cellpadding="0" cellspacing="0" style="margin-bottom:30px; width:100%">
	<tbody>
		<tr>
			<td style="padding:20px;background:#f3f4f5;border-radius:8px;">
			<table cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr>
						<td valign="top" width="100%">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; color:rgba(49,53,59,0.96); width:100%">
							<tbody>
								<tr>
									<td style="color:rgba(49,53,59,0.68);font-weight:bold;padding:0 0 16px">{shipping_method}</td>
								</tr>
								<tr>
									<td>
									<div style="font-size:14px;font-weight:bold;margin:0 0 8px">{receive_name}</div>

									<div style="font-size:14px;color:rgba(49,53,59,0.68);line-height:20px">{address}<br />
									{city}, {province}<br />
									Telp: {phone}</div>
									{courier}
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding:20px 0">
			<h2 style="font-size:18px;font-weight:600;margin:0;color:#212121">Detail Pesanan</h2>
			</td>
		</tr>
		<tr>
			<td style="padding-bottom:20px">
			<table cellpadding="0" cellspacing="0" style="border:0; padding:0 20px; width:100%">
				<tbody>
					<tr>
						<td>{product_detail}</td>
					</tr>
					<tr>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="margin:0; padding:20px; width:100%">
	<tbody>
		<tr>
			<td colspan="2">
			<h2 style="font-size:16px;font-weight:bold;color:rgba(49,53,59,0.96);margin:0;margin-bottom:10px;font-size:18px">Detail Pembayaran</h2>
			</td>
		</tr>
		<tr>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;margin-bottom:8px">Total Harga ({total_item} Barang)</td>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;padding:6px 0;text-align:right;font-weight:bold;color:rgba(49,53,59,0.96)">{subtotal}</td>
		</tr>
		<tr>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;margin-bottom:8px">Kode Unik</td>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;padding:6px 0;text-align:right;font-weight:bold;color:rgba(49,53,59,0.96)">{uniquecode}</td>
		</tr>
		{shipping_fee}
		{discount}
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td style="font-size:14px;font-weight:bold;padding-bottom:16px">Total Bayar</td>
			<td style="font-size:14px;font-weight:bold;padding-bottom:16px;text-align:right;color:#fa591d">{total_payment}</td>
		</tr>
		<tr>
			<td colspan="2" style="font-size:14px;padding:20px 0 5px 0"><strong>Dibayar Dengan </strong></td>
		</tr>
		<tr>
			<td colspan="2">
			<table cellpadding="0" cellspacing="0" style="margin-bottom:16px; width:100%">
				<tbody>
					<tr>
						<td style="font-size:14px;padding-bottom:8px">
						<p style="margin:5px 0 0 0;line-height:1.5;color:rgba(49,53,59,0.68)">Transfer</p>
						</td>
						<td style="font-size:14px;font-weight:bold;padding-bottom:8px;text-align:right;color:rgba(49,53,59,0.96)">{total_payment}</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p>{info_rek_bank}</p>

<table cellpadding="0" cellspacing="0" style="margin-bottom:30px; padding:0 20px; width:100%">
	<tbody>
		<tr>
			<td style="width:100%;padding-left:5px"><a href="{transaction_link}" style="display:block;border:1px solid #02b399;border-radius:10px;padding:15px 10px;text-align:center;color:white;font-weight:bold;text-decoration:none;font-size:14px;background:#02b399" target="_blank">Lihat Daftar Transaksi </a></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:11:04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Notification Order Confirmation',
                'slug' => 'notification-order-confirmation',
                'title' => 'Order Confirmation Information',
                'content' => '<table cellpadding="0" cellspacing="0" style="background-color:transparent; border-spacing:0; margin:0; max-width:100%; width:100%">
	<tbody>
		<tr>
			<td>
			<p style="font-size:13px;margin-top: 10px;color:#212121">Halo <strong>{member}</strong>,</p>
			</td>
		</tr>
		<tr style="margin:0;padding:0">
			<td style="margin:0;padding:10px 0 0;">Pembayaran atas pesanan produk anda telah dikonfirmasi. Berikut informasi data pesanan anda:</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="background:#f3f4f5; border-radius:8px; margin:20px 0; padding:20px; width:100%">
	<tbody>
		<tr>
			<td style="padding:20px;">
			<table cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="40%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Waktu Pemesanan</p>
						</td>
						<td style="padding:0 0 15px 0" width="60%">
						<p style="margin:0;font-weight:bold;font-size:14px;color:rgba(49,53,59,0.96)">{date_order}</p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">No. Invoice</p>
						</td>
						<td style="padding:0 0 15px 0" width="70%">
						<p style="margin:0;color:#02b399;font-size:14px"><strong>{invoice}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Total Bayar</p>
						</td>
						<td style="padding:0 0 15px 0" width="70%">
						<p style="margin:0;color:#fa591d;font-size:14px"><strong>{total_payment}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 10px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Metode Pembayaran</p>
						</td>
						<td style="padding:0 0 10px 0" width="70%">
						<p style="margin:0 0 8px 0"><strong>{payment_method}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 10px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Status Pesanan</p>
						</td>
						<td style="padding:0 0 10px 0" width="70%">
						<p style="margin:0 0 8px 0;font-size:14px"><strong>{status_order} </strong></p>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p>{info_stockist}</p>

<table cellpadding="0" cellspacing="0" style="margin-bottom:30px; width:100%">
	<tbody>
		<tr>
			<td style="padding:20px;background:#f3f4f5;border-radius:8px;">
			<table cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr>
						<td valign="top" width="100%">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; color:rgba(49,53,59,0.96); width:100%">
							<tbody>
								<tr>
									<td style="color:rgba(49,53,59,0.68);font-weight:bold;padding:0 0 16px">{shipping_method}</td>
								</tr>
								<tr>
									<td>
									<div style="font-size:14px;font-weight:bold;margin:0 0 8px">{receive_name}</div>

									<div style="font-size:14px;color:rgba(49,53,59,0.68);line-height:20px">{address}<br />
									{city}, {province}<br />
									<br />
									Telp: {phone}</div>
									{courier}</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding:20px 0">
			<h2 style="font-size:18px;font-weight:600;margin:0;color:#212121">Detail Pesanan</h2>
			</td>
		</tr>
		<tr>
			<td style="padding-bottom:20px">
			<table cellpadding="0" cellspacing="0" style="border:0; padding:0 20px; width:100%">
				<tbody>
					<tr>
						<td>{product_detail}</td>
					</tr>
					<tr>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p>{shipping_fee} {discount}</p>

<table cellpadding="0" cellspacing="0" style="margin:0; padding:20px; width:100%">
	<tbody>
		<tr>
			<td colspan="2">
			<h2 style="font-size:16px;font-weight:bold;color:rgba(49,53,59,0.96);margin:0;margin-bottom:10px;font-size:18px">Detail Pembayaran</h2>
			</td>
		</tr>
		<tr>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;margin-bottom:8px">Total Harga ({total_item} Barang)</td>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;padding:6px 0;text-align:right;font-weight:bold;color:rgba(49,53,59,0.96)">{subtotal}</td>
		</tr>
		<tr>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;margin-bottom:8px">Kode Unik</td>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;padding:6px 0;text-align:right;font-weight:bold;color:rgba(49,53,59,0.96)">{uniquecode}</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td style="font-size:14px;font-weight:bold;padding-bottom:16px">Total Bayar</td>
			<td style="font-size:14px;font-weight:bold;padding-bottom:16px;text-align:right;color:#fa591d">{total_payment}</td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-14 16:25:51',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Notification Order Cancelled',
                'slug' => 'notification-order-cancelled',
                'title' => 'Order Cancelled Information',
                'content' => '<table cellpadding="0" cellspacing="0" style="background-color:transparent; border-spacing:0; margin:0; max-width:100%; width:100%">
	<tbody>
		<tr>
			<td>
			<p style="font-size:13px;margin-top: 10px;color:#212121">Halo <strong>{member}</strong>,</p>
			</td>
		</tr>
		<tr style="margin:0;padding:0">
			<td style="margin:0;padding:10px 0 0;">
			Pesanan produk anda telah telah dibatalkan. Berikut informasi data pesanan anda:
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="background:#f3f4f5; border-radius:8px; margin:20px 0; padding:20px; width:100%">
	<tbody>
		<tr>
			<td style="padding:20px;">
			<table cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="40%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Waktu Pemesanan</p>
						</td>
						<td style="padding:0 0 15px 0" width="60%">
						<p style="margin:0;font-weight:bold;font-size:14px;color:rgba(49,53,59,0.96)">{date_order}</p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">No. Invoice</p>
						</td>
						<td style="padding:0 0 15px 0" width="70%">
						<p style="margin:0;color:#02b399;font-size:14px"><strong>{invoice}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 15px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Total Bayar</p>
						</td>
						<td style="padding:0 0 15px 0" width="70%">
						<p style="margin:0;color:#fa591d;font-size:14px"><strong>{total_payment}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 10px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Metode Pembayaran</p>
						</td>
						<td style="padding:0 0 10px 0" width="70%">
						<p style="margin:0 0 8px 0"><strong>{payment_method}</strong></p>
						</td>
					</tr>
					<tr style="vertical-align:top;padding-bottom:10px">
						<td style="padding:0 0 10px 0" width="30%">
						<p style="color:rgba(49,53,59,0.68);font-size:12px;margin:0">Status Pesanan</p>
						</td>
						<td style="padding:0 0 10px 0" width="70%">
						<p style="margin:0 0 8px 0;color:#fa591d;font-size:14px"><strong>{status_order} </strong></p>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

{info_stockist}

<table cellpadding="0" cellspacing="0" style="margin-bottom:30px; width:100%">
	<tbody>
		<tr>
			<td style="padding:20px;background:#f3f4f5;border-radius:8px;">
			<table cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr>
						<td valign="top" width="100%">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; color:rgba(49,53,59,0.96); width:100%">
							<tbody>
								<tr>
									<td style="color:rgba(49,53,59,0.68);font-weight:bold;padding:0 0 16px">{shipping_method}</td>
								</tr>
								<tr>
									<td>
									<div style="font-size:14px;font-weight:bold;margin:0 0 8px">{receive_name}</div>

									<div style="font-size:14px;color:rgba(49,53,59,0.68);line-height:20px">{address}<br />
									{city}, {province}<br />
									<br />
									Telp: {phone}</div>
									{courier}
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding:20px 0">
			<h2 style="font-size:18px;font-weight:600;margin:0;color:#212121">Detail Pesanan</h2>
			</td>
		</tr>
		<tr>
			<td style="padding-bottom:20px">
			<table cellpadding="0" cellspacing="0" style="border:0; padding:0 20px; width:100%">
				<tbody>
					<tr>
						<td>{product_detail}</td>
					</tr>
					<tr>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="margin:0; padding:20px; width:100%">
	<tbody>
		<tr>
			<td colspan="2">
			<h2 style="font-size:16px;font-weight:bold;color:rgba(49,53,59,0.96);margin:0;margin-bottom:10px;font-size:18px">Detail Pembayaran</h2>
			</td>
		</tr>
		<tr>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;margin-bottom:8px">Total Harga ({total_item} Barang)</td>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;padding:6px 0;text-align:right;font-weight:bold;color:rgba(49,53,59,0.96)">{subtotal}</td>
		</tr>
		<tr>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;margin-bottom:8px">Kode Unik</td>
			<td style="color:rgba(49,53,59,0.68);font-size:14px;padding:6px 0;text-align:right;font-weight:bold;color:rgba(49,53,59,0.96)">{uniquecode}</td>
		</tr>
		{shipping_fee}
		{discount}
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td style="font-size:14px;font-weight:bold;padding-bottom:16px">Total Bayar</td>
			<td style="font-size:14px;font-weight:bold;padding-bottom:16px;text-align:right;color:#fa591d">{total_payment}</td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:11:58',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Notification Transfer Product for Sender',
                'slug' => 'notification-transfer-pin-sender',
            'title' => 'Product Transfer Information  (Send Product)',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Hi {member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Anda telah melakukan transfer Produk pada tanggal <b>{transfer_date}</b>.</td>
		</tr>
		<tr>
			<td>Berikut detail Transaksi:</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="100%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Penerima</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Name</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{name}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding:20px 0">
			<h2 style="font-size:18px;font-weight:600;margin:0;color:#212121">Detail Produk</h2>
			</td>
		</tr>
		<tr>
			<td style="padding-bottom:20px">
			<table cellpadding="0" cellspacing="0" style="border:0; padding:0 20px; width:100%">
				<tbody>
					<tr>
						<td>{product_detail}</td>
					</tr>
					<tr>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Notification Transfer Product for Receiver',
                'slug' => 'notification-transfer-pin-receiver',
            'title' => 'Product Transfer Information (Receive Product)',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Hi {member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Anda telah menerima transfer produk pada tanggal <b>{transfer_date}</b>.</td>
		</tr>
		<tr>
			<td>Berikut detail Transaksi:</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="100%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Pengirim</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Name</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{name}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding:20px 0">
			<h2 style="font-size:18px;font-weight:600;margin:0;color:#212121">Detail Produk</h2>
			</td>
		</tr>
		<tr>
			<td style="padding-bottom:20px">
			<table cellpadding="0" cellspacing="0" style="border:0; padding:0 20px; width:100%">
				<tbody>
					<tr>
						<td>{product_detail}</td>
					</tr>
					<tr>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:07',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Notification Withdraw',
                'slug' => 'notification-withdraw',
                'title' => 'Withdrawal Information',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Hi {member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Congratulations your bonus wallet has been transferred.</td>
		</tr>
		<tr>
			<td>Here are the details of the transaction :</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="100%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Detail</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Name</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{name}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Bank</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{bank}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Bank Account</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{bill}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="25%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Nominal</p>
												</td>
												<td width="75%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{nominal}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards,</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:08',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Notification Change Password',
                'slug' => 'notification-change-password',
                'title' => 'Change Password Information',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Halo&nbsp;{member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Password {type_password} anda telah berhasil diubah.</td>
		</tr>
		<tr>
			<td>Brikut password {type_password} baru anda :</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="50%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Your Account</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Password</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{password}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:10',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Notification Forgot Password',
                'slug' => 'notification-forget-password',
                'title' => 'Forgot Password Information',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Halo&nbsp;{member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Password anda telah berhasil direset.</td>
		</tr>
		<tr>
			<td>Berikut password {type_password} anda yang baru:</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="50%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Akun Anda</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Password</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{password}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:11',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Notification Reset Password',
                'slug' => 'notification-reset-password',
                'title' => 'Reset Password Information',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Halo&nbsp;{member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td>Password anda telah direset oleh <strong>Manajemen</strong>&nbsp;<strong>{company_name}</strong></td>
		</tr>
		<tr>
			<td>Berikut password {type_password} anda yang baru :</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="50%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">Akun Anda</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Username</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{username}</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin-top:12px!important; width:100%">
										<tbody>
											<tr>
												<td width="30%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">Password</p>
												</td>
												<td width="70%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#212121">{password}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:13',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Notification OTP Code',
                'slug' => 'notification-otp-code',
                'title' => 'OTP Code Information',
                'content' => '<table border="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:21px;color:#212121"><strong>Hi {member_name}</strong></p>
			</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px 10px;">
			<table border="0" cellspacing="0" role="presentation" style="width:100%">
				<tbody>
					<tr>
						<td style="padding:16px;background-color:#f3f4f5;border-radius:8px">
						<table border="0" cellspacing="0" role="presentation" style="width:100%">
							<tbody>
								<tr>
									<td>
									<table border="0" cellspacing="0" role="presentation" style="width:100%">
										<tbody>
											<tr>
												<td width="10%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#515151">Your OTP code is :</p>
												</td>
											</tr>
										</tbody>
									</table>

									<table border="0" cellspacing="0" role="presentation" style="margin:20px 0px!important; width:100%">
										<tbody>
											<tr>
												<td style="text-align:center" width="100%">
												<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:24px;font-weight:bold;line-height:21px;color:#212121">{otp_code}</p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td style="padding: 20px 0px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:18px;color:#727579">Immediately type the code in the <strong>{company_name}</strong> application and it will automatically expire in 10 minutes if not used. If this code doesn&#39;t work, please press the button <em><strong>&quot;Resend&quot;</strong></em>.</p>
			</td>
		</tr>
		<tr>
			<td style="padding: 10px 0px 5px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:18px;color:#727579"><em>* This code automatically expired or inactive for use when :</em>.</p>
			</td>
		</tr>
		<tr>
			<td style="padding: 0px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:18px;color:#727579">(1) Have used this code</p>
			</td>
		</tr>
		<tr>
			<td style="padding: 0px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:18px;color:#727579">(2) Request a new code from <strong>{company_name}</strong> application</p>
			</td>
		</tr>
		<tr>
			<td style="padding: 0px 0px 20px;">
			<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:18px;color:#727579">(3) After 10 minutes if not used</p>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #555; padding: 10px 0px 0px;">Regards,</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff"><strong>{company_name}</strong></td>
		</tr>
	</tbody>
</table>
',
                'status' => 1,
                'type' => 'email',
                'datecreated' => '2024-06-01 00:00:00',
                'datemodified' => '2025-04-06 15:08:15',
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'Notification Change Password',
                'slug' => 'notification-change-password',
                'title' => 'Informasi Ganti Password',
                'content' => 'Hi {member_name},

Password akun anda telah berhasil di ganti.
Berikut informasi Password akun baru anda :

Username : {username}
Password : {password}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-01 00:00:00',
            ),
            14 => 
            array (
                'id' => 22,
                'name' => 'Notification Reset Password',
                'slug' => 'notification-reset-password',
                'title' => 'Informasi Reset Password',
                'content' => 'Hi {member_name},

Password akun anda telah di reset oleh Admin {company_name}.
Berikut informasi password baru akun anda :

Username : {username}
Password : {password}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-01 00:00:00',
            ),
            15 => 
            array (
                'id' => 23,
                'name' => 'Notification Forgot Password',
                'slug' => 'notification-forget-password',
                'title' => 'Informasi Lupa Password',
                'content' => 'Hi {member_name},

Password akun anda telah berhasil di reset.
Berikut informasi Password baru akun anda :

Username : {username}
Password : {password}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-01 00:00:00',
            ),
            16 => 
            array (
                'id' => 24,
                'name' => 'Notification New Member Non Active',
                'slug' => 'notification-new-member',
            'title' => 'Pendaftaran Member Baru (belum aktif)',
                'content' => '*Selamat Bergabung...*

Terima kasih Anda sudah mendaftar sebagai anggota baru di {company_name}.
Berikut adalah informasi akun anda : 

Nama : {name}
Username : {username}
Password : {password}

Untuk login, silahkan klik:
{url_login}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-24 21:03:51',
            ),
            17 => 
            array (
                'id' => 25,
                'name' => 'Notification New Member Active',
                'slug' => 'notification-new-member-active',
                'title' => 'Akun Member Sudah AKTIF !',
                'content' => '*Selamat Bergabung*

Akun anda sudah *AKTIF*, sekarang anda bisa akses ke member area of {company_name}.
Inilah informasi Akun Anda :

Username : {username}
Password : {password}

Untuk login, silahkan klik:
{url_login}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-24 21:02:30',
            ),
            18 => 
            array (
                'id' => 26,
                'name' => 'Notification Sponsor',
                'slug' => 'notification-sponsor',
                'title' => 'Informasi Member Baru',
                'content' => 'Hi {member_name},

Selamat, Anda mendapatkan Member Baru pada Jaringan anda.
Ayo Perkenalkan ke teman dan relasi anda, dan bangun jaringan yang sehat menuju passive income

Informasi Member Baru anda adalah:
Nama : {name}
Username : {username}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-24 21:03:14',
            ),
            19 => 
            array (
                'id' => 27,
                'name' => 'Notification Withdraw',
                'slug' => 'notification-withdraw',
                'title' => 'Informasi Transfer Bonus',
                'content' => 'Hi {name},
Komisi anda telah ditransfer. 
Berikut detail transaksinya :

Username : {username}
---------------------------
Bank : {bank_name}
No. Rekening : {bill}
An. Rekening : {bill_name}
Nominal : {nominal}

---------------------------
Salam Sukses,
{company_name}',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2025-04-06 15:09:32',
            ),
            20 => 
            array (
                'id' => 28,
                'name' => 'Notification Product Order',
                'slug' => 'notification-shop-order',
                'title' => 'Informasi Pemesanan Produk',
                'content' => 'Halo {member_name}

Terima kasih sudah berbelanja di {company_name}. 
Sebagai konfirmasi, berikut informasi data pesanan anda:

{info_order}
{info_stockist}
{shipping_detail}

{product_detail}
{payment_detail}

{info_transfer}

-----------------------------------
Salam Sukses,
{company_name}
',
                'status' => 1,
                'type' => 'whatsapp',
                'datecreated' => '2024-12-01 00:00:00',
                'datemodified' => '2024-12-01 00:00:00',
            ),
        ));
        
        
    }
}