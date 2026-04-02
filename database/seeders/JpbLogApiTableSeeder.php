<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbLogApiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_log_api')->delete();
        
        \DB::table('jpb_log_api')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5Njk3ODg2LCJBUElfVElNRSI6MTc0OTY5Nzg4Nn0.BPdahOwpymhOk5F-L6tVapWUunP6lryJHOz38OouKKg',
                'datetime' => '2025-06-12 10:11:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"3ef6a5b0a2b75792a0a46fc0019f0285384ad6a2","jpb_cookie_token":"e2d027aedabcbbc9c2f66d2a5fcba6f6"},"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5Njk3OTU2LCJBUElfVElNRSI6MTc0OTY5Nzk1Nn0.hVMCeEeolAW2tnXt6MvVHOkQ_ApZRSWe40IV3bRGg3M',
                'datetime' => '2025-06-12 10:12:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5Njk4MDk3LCJBUElfVElNRSI6MTc0OTY5ODA5N30.TzcHxyf9d76VQz5yUf2IB0jMP5UItizAeF6K1qOWa7M',
                'datetime' => '2025-06-12 10:14:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"2bd37fab94b3f1f652e6ece9dd21fa04ecbbd303","jpb_cookie_token":"22524baeab045a95478b9b1c502ed4b5"},"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5Njk4MTQ3LCJBUElfVElNRSI6MTc0OTY5ODE0N30.rimOyXSaPc1KW5lKgMcZW3KKqqpAiaEDTsdmz3Jlsng',
                'datetime' => '2025-06-12 10:15:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpb_cookie_token":"22524baeab045a95478b9b1c502ed4b5","jpbsession":"b1c0af045ff52bb2b6908f7c898ba7b6670859d4"},"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5NzAwMTY4LCJBUElfVElNRSI6MTc0OTcwMDE2OH0.T1P998IR-QeN4uYfiIr8U6p6U5NA3kXTAP1mo6Q8iqM',
                'datetime' => '2025-06-12 10:49:28',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"057663b504c248fc237c1bf87ff9141559fcd139"},"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5NzAwNDUxLCJBUElfVElNRSI6MTc0OTcwMDQ1MX0.sw2impJZyellqcDSv0URLxxlXIsdr2mHUZJ_HmOBmaY',
                'datetime' => '2025-06-12 10:54:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpb_cookie_token":"22524baeab045a95478b9b1c502ed4b5","jpbsession":"2c0078a7749d38f3acb27f77d1b651b5d30a8a69"},"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzQ5NzA3NDM0LCJBUElfVElNRSI6MTc0OTcwNzQzNH0.xFHhSoDKk5lXk0c1Y1dlTtpF0PF7vhpIcJNpkjrb8y4',
                'datetime' => '2025-06-12 12:50:34',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpb_cookie_token":"da867faf8162fde464a4f1ee13961a40","jpbsession":"cef28595fd177e32935971fcf7dbcb22acf72043"},"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUwMDU0ODUyLCJBUElfVElNRSI6MTc1MDA1NDg1Mn0.SjNFzfXHdu8Ji0khv51NZeaoc_aZRHsrio5pe5YolMQ',
                'datetime' => '2025-06-16 13:20:52',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana7',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"1b9fcdb6d8cd6773df8938aa8a4f36dbf9c0e914"},"status":"SUCCESS","username":"jpbuana7","password":"dmY4QnNHWkdsWmM1OE9qZytCOUYwdz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6OCwidXNlcm5hbWUiOiJqcGJ1YW5hNyIsIm5hbWUiOiJKQUdBRCBQRVNPTkEgQlVBTkEiLCJyYW5rIjoibWVtYmVyIiwiZW1haWwiOiJjaWMuY29tbXVuaXRAZ21haWwuY29tIiwicGhvbmUiOiIiLCJjb3VudHJ5IjoiaWQiLCJzcG9uc29yIjoiMiIsInVwbGluZSI6IjQiLCJwb3NpdGlvbiI6InJpZ2h0IiwibGV2ZWwiOiIzIiwiZ2VuIjoiMiIsImdyb3VwIjoiNiIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNzowNDo0MCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUwMDU2NzY0LCJBUElfVElNRSI6MTc1MDA1Njc2NH0.3ss1U4HeY-gym_p-MlmvzQJVzTSGAfnFzZETWpTjn2k',
                'datetime' => '2025-06-16 13:52:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbasil',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"1a833161f85a2446aec3043868c6602d8a29440b"},"status":"SUCCESS","username":"jpbasil","password":"QzNpbEtVK3hEejVEdElJQnV0a1ZsZz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6OSwidXNlcm5hbWUiOiJqcGJhc2lsIiwibmFtZSI6IkpPU0VQSCBQQVNLQUxJUyBCQVNJTCIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJjZW9wdHllc0BnbWFpbC5jb20iLCJwaG9uZSI6Iis2MjgxNzc2MzYzNzM4IiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIiLCJ1cGxpbmUiOiI1IiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiI0IiwiZ2VuIjoiMiIsImdyb3VwIjoiNyIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNzozMDo0NCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUwMDYyMjA0LCJBUElfVElNRSI6MTc1MDA2MjIwNH0.QNXntX8pgqPqSiWRuhg4j1T4onpamRQCpHesY19RkRY',
                'datetime' => '2025-06-16 15:23:24',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.9.2"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUwMTMwNzI5LCJBUElfVElNRSI6MTc1MDEzMDcyOX0.YOe8cyM5XDDb7W0pGCUNTmG54aAMtkoRXwDKGBifeUg',
                'datetime' => '2025-06-17 10:25:29',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'MEMBER_RO',
                'status' => 'JPBUANA7',
                'username' => 'jpbuana7',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpb_cookie_token":"5cb9c8a54ccc65c13b5b2c049202db0c","jpbsession":"9dd3c32037e11df2cfc54afcdba39355e63fc0d4"},"reg_form":"api","reg_type":"transfer","id_activator":"8","id_member":"8","id_stockist":0,"data_ro":{"invoice":"INV\\/RO\\/00001312","id_activator":"8","id_member":"8","id_stockist":0,"position":"","type":"transfer","pins":"","meta":"[{\\"grouping\\":\\"product\\",\\"grouping_id\\":\\"1\\",\\"product_id\\":\\"1\\",\\"package_id\\":0,\\"varian_id\\":0,\\"type\\":\\"perdana\\",\\"sku\\":\\"PAKETA001\\",\\"name\\":\\"B4 Formats\\",\\"alias\\":\\"B4 Formats\\",\\"varian\\":\\"\\",\\"image\\":\\"https:\\\\\\/\\\\\\/jpbuana.s3.us-west-004.backblazeb2.com\\\\\\/products\\\\\\/b4-formats-1753095327.jpeg\\",\\"bv\\":\\"2500\\",\\"weight\\":\\"1\\",\\"omzet\\":\\"3300000\\",\\"omzet_item\\":0,\\"price\\":\\"3300000\\",\\"price_cart\\":\\"3300000\\",\\"qty\\":\\"2\\",\\"additional_cost\\":false,\\"point_sponsor\\":\\"0\\",\\"point_pairing\\":\\"0\\",\\"point_reward\\":\\"0\\",\\"point_stockist\\":\\"0\\",\\"subtotal\\":6600000,\\"subtotal_bv\\":5000,\\"subtotal_omzet\\":6600000,\\"subtotal_cost\\":0,\\"subtotal_weight\\":2,\\"subtotal_point_sponsor\\":0,\\"subtotal_point_pairing\\":0,\\"subtotal_point_reward\\":0,\\"subtotal_point_stockist\\":0,\\"productitems\\":false,\\"discount\\":0,\\"discounts\\":{\\"nominal\\":0,\\"percent\\":0}}]","point":0,"total_bv":5000,"total_qty":2,"subtotal":6600000,"unique":1,"shipping":0,"autoro":0,"total_checkout":6600000,"total_payment":6600001,"total_omzet":6600000,"shipping_method":"pickup","desc":"Manual RO Saya","status":0,"datecreated":"2025-07-21 18:02:34","datemodified":"2025-07-21 18:02:34"},"shop_order":{"invoice":"INV\\/RO\\/00001312","id_member":"8","id_stockist":0,"type_order":"manual_ro","products":"a:1:{i:0;a:33:{s:8:\\"grouping\\";s:7:\\"product\\";s:11:\\"grouping_id\\";s:1:\\"1\\";s:10:\\"product_id\\";s:1:\\"1\\";s:10:\\"package_id\\";i:0;s:9:\\"varian_id\\";i:0;s:4:\\"type\\";s:7:\\"perdana\\";s:3:\\"sku\\";s:9:\\"PAKETA001\\";s:4:\\"name\\";s:10:\\"B4 Formats\\";s:5:\\"alias\\";s:10:\\"B4 Formats\\";s:6:\\"varian\\";s:0:\\"\\";s:5:\\"image\\";s:82:\\"https:\\/\\/jpbuana.s3.us-west-004.backblazeb2.com\\/products\\/b4-formats-1753095327.jpeg\\";s:2:\\"bv\\";s:4:\\"2500\\";s:6:\\"weight\\";s:1:\\"1\\";s:5:\\"omzet\\";s:7:\\"3300000\\";s:10:\\"omzet_item\\";i:0;s:5:\\"price\\";s:7:\\"3300000\\";s:10:\\"price_cart\\";s:7:\\"3300000\\";s:3:\\"qty\\";s:1:\\"2\\";s:15:\\"additional_cost\\";b:0;s:13:\\"point_sponsor\\";s:1:\\"0\\";s:13:\\"point_pairing\\";s:1:\\"0\\";s:12:\\"point_reward\\";s:1:\\"0\\";s:14:\\"point_stockist\\";s:1:\\"0\\";s:8:\\"subtotal\\";i:6600000;s:11:\\"subtotal_bv\\";i:5000;s:14:\\"subtotal_omzet\\";i:6600000;s:13:\\"subtotal_cost\\";i:0;s:15:\\"subtotal_weight\\";i:2;s:22:\\"subtotal_point_sponsor\\";i:0;s:22:\\"subtotal_point_pairing\\";i:0;s:21:\\"subtotal_point_reward\\";i:0;s:23:\\"subtotal_point_stockist\\";i:0;s:8:\\"discount\\";i:0;}}","meta":"[{\\"grouping\\":\\"product\\",\\"grouping_id\\":\\"1\\",\\"product_id\\":\\"1\\",\\"package_id\\":0,\\"varian_id\\":0,\\"type\\":\\"perdana\\",\\"sku\\":\\"PAKETA001\\",\\"name\\":\\"B4 Formats\\",\\"alias\\":\\"B4 Formats\\",\\"varian\\":\\"\\",\\"image\\":\\"https:\\\\\\/\\\\\\/jpbuana.s3.us-west-004.backblazeb2.com\\\\\\/products\\\\\\/b4-formats-1753095327.jpeg\\",\\"bv\\":\\"2500\\",\\"weight\\":\\"1\\",\\"omzet\\":\\"3300000\\",\\"omzet_item\\":0,\\"price\\":\\"3300000\\",\\"price_cart\\":\\"3300000\\",\\"qty\\":\\"2\\",\\"additional_cost\\":false,\\"point_sponsor\\":\\"0\\",\\"point_pairing\\":\\"0\\",\\"point_reward\\":\\"0\\",\\"point_stockist\\":\\"0\\",\\"subtotal\\":6600000,\\"subtotal_bv\\":5000,\\"subtotal_omzet\\":6600000,\\"subtotal_cost\\":0,\\"subtotal_weight\\":2,\\"subtotal_point_sponsor\\":0,\\"subtotal_point_pairing\\":0,\\"subtotal_point_reward\\":0,\\"subtotal_point_stockist\\":0,\\"productitems\\":false,\\"discount\\":0,\\"discounts\\":{\\"nominal\\":0,\\"percent\\":0}}]","total_bv":5000,"total_qty":2,"subtotal":6600000,"unique":1,"shipping":0,"discount":0,"total_checkout":6600000,"total_payment":6600001,"total_omzet":6600000,"status":0,"weight":2,"payment_method":"transfer","shipping_method":"pickup","voucher":0,"name":"JAGAD PESONA BUANA","phone":"0+6281234567890","email":"cic.communit@gmail.com","id_province":"0","id_district":"0","id_subdistrict":"0","province":"","district":"","subdistrict":"","village":"","address":"","courier":"","service":"","pin_transfer":0,"datecreated":"2025-07-21 18:02:34","datemodified":"2025-07-21 18:02:34","created_by":"jpbuana7"}}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6OCwidXNlcm5hbWUiOiJqcGJ1YW5hNyIsIm5hbWUiOiJKQUdBRCBQRVNPTkEgQlVBTkEiLCJyYW5rIjoibWVtYmVyIiwiZW1haWwiOiJjaWMuY29tbXVuaXRAZ21haWwuY29tIiwicGhvbmUiOiIiLCJjb3VudHJ5IjoiaWQiLCJzcG9uc29yIjoiMiIsInVwbGluZSI6IjQiLCJwb3NpdGlvbiI6InJpZ2h0IiwibGV2ZWwiOiIzIiwiZ2VuIjoiMiIsImdyb3VwIjoiNiIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNzowNDo0MCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUwMDU2NzY0LCJBUElfVElNRSI6MTc1MDA1Njc2NH0.3ss1U4HeY-gym_p-MlmvzQJVzTSGAfnFzZETWpTjn2k',
                'datetime' => '2025-07-21 18:02:35',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTMxOTA2ODEsIkFQSV9USU1FIjoxNzUzMTkwNjgxfQ.MFa6fXnNX6E4gTV_-V1aoSAcl5kp0R3nMHL8R9lYCMQ',
                'datetime' => '2025-07-22 20:24:41',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiKzYyODE3NjE4NjY2IiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMjg2NDExLCJBUElfVElNRSI6MTc1MzI4NjQxMX0.G77Cl3Wh5naYCl2VTgISKa69ptR3o2PM9sGf0BZcG5c',
                'datetime' => '2025-07-23 23:00:11',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiKzYyODE3NjE4NjY2IiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMjkwMTUyLCJBUElfVElNRSI6MTc1MzI5MDE1Mn0.Ugfkv8TobW8RPfEeybFPk0-JBC6DK8ersKI3K8_o8n8',
                'datetime' => '2025-07-24 00:02:32',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"c9f7288ae132a5fa0052d3fa1a5ee1dfd8243350","jpb_cookie_token":"994655da23380f134aab9edda262af93"},"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiKzYyODE3NjE4NjY2IiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMjkwMzIyLCJBUElfVElNRSI6MTc1MzI5MDMyMn0.ony1OtuMJ9cubUKlS3PKUBBAmuqUQREEI1Tgz-fsAxQ',
                'datetime' => '2025-07-24 00:05:22',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"15db0f4eadd7a4613f8af9d26518dd7afd3c962d"},"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiKzYyODE3NjE4NjY2IiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMjkwNDA2LCJBUElfVElNRSI6MTc1MzI5MDQwNn0.p9ojMYLU0ONOFeKbUxRjqWy1L5tLAubEByAplUxms60',
                'datetime' => '2025-07-24 00:06:46',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'eternalglory',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpb_cookie_token":"ae4f45913b092acd1a254bf3fe4cf8ef","jpbsession":"9191e2f0c7a428cacfbde8b188e8614c483710e6"},"status":"SUCCESS","username":"eternalglory","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjMsInVzZXJuYW1lIjoiZXRlcm5hbGdsb3J5IiwibmFtZSI6IlJZQU5ESSBHVVNBTlRPIFRISUFOIiwicmFuayI6InN0YXIiLCJlbWFpbCI6InJndXNhbnRvQGdtYWlsLmNvbSIsInBob25lIjoiKzYyODE3NjE4NjY2IiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjIyIiwidXBsaW5lIjoiMjIiLCJwb3NpdGlvbiI6ImxlZnQiLCJsZXZlbCI6IjEzIiwiZ2VuIjoiNyIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxODoyMTo1NyIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMjk4MzAxLCJBUElfVElNRSI6MTc1MzI5ODMwMX0.jWIQAYWxgkqBTnQS3HqLDXNXHK2j5OAaiLiSvQSTbLs',
                'datetime' => '2025-07-24 02:18:21',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
            'user_agent' => '{"agent":"Chrome 135.0.0.0","agent_string":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/135.0.0.0 Safari\\/537.36"}',
                'platform' => 'Linux',
                'desc' => '{"cookie":{"jpb_cookie_token":"afaa5198586fa268d0b33e582ffa6567","jpbsession":"b8a5b3a05ce7c4371230a87ca20e30c319214bd9"},"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMjk4NDkxLCJBUElfVElNRSI6MTc1MzI5ODQ5MX0.lh6LsST6tq2DjpKWLaCBwhNYK997_TfLO_3IKR8tjPA',
                'datetime' => '2025-07-24 02:21:31',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'jpbuana',
                'ip' => '127.0.0.1',
            'user_agent' => '{"agent":"Chrome 135.0.0.0","agent_string":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/135.0.0.0 Safari\\/537.36"}',
                'platform' => 'Linux',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"jpbuana","password":"Q0grNDdFemhJR3FWRXJHRXJ4amN5dz09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwidXNlcm5hbWUiOiJqcGJ1YW5hIiwibmFtZSI6IkpBR0FEIFBFU09OQSBCVUFOQSIsInJhbmsiOiJzdGFyIiwiZW1haWwiOiJqYWdhZHBlc29uYWJ1YW5hQGdtYWlsLmNvbSIsInBob25lIjoiIiwiY291bnRyeSI6ImlkIiwic3BvbnNvciI6IjEiLCJ1cGxpbmUiOiIxIiwicG9zaXRpb24iOiJsZWZ0IiwibGV2ZWwiOiIxIiwiZ2VuIjoiMSIsImdyb3VwIjoiMSIsImRhdGVjcmVhdGVkIjoiMjAyNS0wNC0xNyAxNjo0NzozMCIsInJvbGUiOiJtZW1iZXIiLCJtb2JpbGVfYXBwIjp0cnVlLCJ0aW1lIjoxNzUzMzE4MjY3LCJBUElfVElNRSI6MTc1MzMxODI2N30.HR1YbrhWjk9aMLZpvsHrkG5ZKb3MnpWIxtFJUN3H0d0',
                'datetime' => '2025-07-24 07:51:07',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"00c817f65b9cf15e47f02c5746337b1166787062"},"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTMzMjE1NTcsIkFQSV9USU1FIjoxNzUzMzIxNTU3fQ.18fycwyoQ76wUi6xZlEjhhiqzMPxLWMgmUw5iHbCm8w',
                'datetime' => '2025-07-24 08:45:57',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"ef1f9a02c8b3cb701f6e85068bec069544528b26"},"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTMzMjk2NjQsIkFQSV9USU1FIjoxNzUzMzI5NjY0fQ.CyN2WApdqiRXLavpeleDbsejPRVnuHcXzSFqAejISWE',
                'datetime' => '2025-07-24 11:01:04',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTMzNjA4MTksIkFQSV9USU1FIjoxNzUzMzYwODE5fQ.vrwJIzmx7xfDVuZlzeFJUHMwT03JKhYZGeMSU5mVK4w',
                'datetime' => '2025-07-24 19:40:19',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"dffd6be28385bd0e47434b3ddc02e98be0567a63","jpb_cookie_token":"a29f1079eef89f543dcf9308c621c9e0"},"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTMzNjA4NzUsIkFQSV9USU1FIjoxNzUzMzYwODc1fQ.sdsDfVXd-NEu3s8ZH-WkGP9m2D13y1NCZueK2uWj-EM',
                'datetime' => '2025-07-24 19:41:15',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTM0NTQzMDgsIkFQSV9USU1FIjoxNzUzNDU0MzA4fQ.8qLKPXNXhT3ia5UBMV4JlwYbmJsacXu54Wxw1UcObYU',
                'datetime' => '2025-07-25 21:38:28',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTM0NTQ1MTYsIkFQSV9USU1FIjoxNzUzNDU0NTE2fQ.JxaULPfsXnLn9Iz9NsfhCbl8cVP42_NdzblQCGwnWSA',
                'datetime' => '2025-07-25 21:41:56',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTM1MzQ4NDEsIkFQSV9USU1FIjoxNzUzNTM0ODQxfQ.NSUJYLPgEa3cSJkwCREwBSTli8tB8gQ6FufXT8nDyc0',
                'datetime' => '2025-07-26 20:00:41',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"ffa1e59ca83207b29319c8f186c3a7b774bf9646"},"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTM1MzQ5MDgsIkFQSV9USU1FIjoxNzUzNTM0OTA4fQ.ssIXwU8zMjwajApPz7np9EMFCpmke4HXIZLrILmBUNs',
                'datetime' => '2025-07-26 20:01:48',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTM2MTIxMDQsIkFQSV9USU1FIjoxNzUzNjEyMTA0fQ.xWR7BgHsKsum83MSx3Glk1LCilppqRXhCWzBwXeM2ss',
                'datetime' => '2025-07-27 17:28:24',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
            'user_agent' => '{"agent":"Chrome 135.0.0.0","agent_string":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/135.0.0.0 Safari\\/537.36"}',
                'platform' => 'Linux',
                'desc' => '{"cookie":{"jpbsession":"7a0d52c7be04c9c2a092da0ca24df9afa472b55f"},"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTQwMTU0MDMsIkFQSV9USU1FIjoxNzU0MDE1NDAzfQ.QdU2Qydwjm-rXEpQH4SijdUP9PkuWtQf-OWM5T6zOnE',
                'datetime' => '2025-08-01 09:30:03',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTUwOTM5MDYsIkFQSV9USU1FIjoxNzU1MDkzOTA2fQ.97zd-XnMseVgTyMoXqzOP77JqurP1_1Cl17IuV68ayE',
                'datetime' => '2025-08-13 21:05:06',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTY4MTc4MDYsIkFQSV9USU1FIjoxNzU2ODE3ODA2fQ.eIweopDkI6JA62h_CL8TvWTMT2e1tBpTJwYJdlkqS7I',
                'datetime' => '2025-09-02 19:56:46',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":{"jpbsession":"7296553b1fee3b53c9e4f7c1483fbc93ed63fe8e","jpb_cookie_token":"31797991ae01fa8c34ae3e547b76a406"},"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTY4MTc4OTUsIkFQSV9USU1FIjoxNzU2ODE3ODk1fQ.8xQrzzpj_UCcgtVucBth0I3PldBQCEWR5n32uFNfhQI',
                'datetime' => '2025-09-02 19:58:15',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'LOGIN',
                'status' => 'SUCCESS',
                'username' => 'demoaccount',
                'ip' => '127.0.0.1',
                'user_agent' => '{"agent":"Unidentified User Agent","agent_string":"okhttp\\/4.12.0"}',
                'platform' => 'Unknown Platform',
                'desc' => '{"cookie":[],"status":"SUCCESS","username":"demoaccount","password":"TTNmK0MveVE2YURJL2hFb3N1dko2QT09"}',
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Mjc0LCJ1c2VybmFtZSI6ImRlbW9hY2NvdW50IiwibmFtZSI6IkRFTU8gQUNDT1VOVCIsInJhbmsiOiJtZW1iZXIiLCJlbWFpbCI6ImRlbW9hY2NvdW50QGpwYnVhbmEuY29tIiwicGhvbmUiOiIrNjI4MTIzNDU2Nzg5MCIsImNvdW50cnkiOiJpZCIsInNwb25zb3IiOiIxIiwidXBsaW5lIjoiMSIsInBvc2l0aW9uIjoicmlnaHQiLCJsZXZlbCI6IjEiLCJnZW4iOiIxIiwiZ3JvdXAiOiIyIiwiZGF0ZWNyZWF0ZWQiOiIyMDI1LTA3LTIxIDIzOjE5OjU4Iiwicm9sZSI6Im1lbWJlciIsIm1vYmlsZV9hcHAiOnRydWUsInRpbWUiOjE3NTY4NzgxMTUsIkFQSV9USU1FIjoxNzU2ODc4MTE1fQ.qS3IRzXXHpoXCx9jBdqbG_LBrEC35lH_20sCUzOQ3GM',
                'datetime' => '2025-09-03 12:41:55',
            ),
        ));
        
        
    }
}