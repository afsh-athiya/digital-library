public function run()
 {
  DB::table('members')->insert([
    ['name' => 'Ali', 'email' => 'ali@mail.com', 'phone' => '081234567'],
    ['name' => 'Budi', 'email' => 'budi@mail.com', 'phone' =>
    '081987654'],
 ]);
 }