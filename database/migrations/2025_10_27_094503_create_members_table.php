public function up()
{
 Schema::create('members', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('phone');
    $table->timestamps();
 });
}