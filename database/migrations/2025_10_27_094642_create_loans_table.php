public function up()
 {
  Schema::create('loans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('member_id')->constrained()->onDelete('cascade');
    $table->foreignId('book_id')->constrained()->onDelete('cascade');
    $table->date('loan_date');
    $table->date('return_date')->nullable();
    $table->timestamps();
 });
 }