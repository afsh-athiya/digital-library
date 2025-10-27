 public function up()
 {
  Schema::create('books', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->foreignId('author_id')->constrained()->onDelete('cascade');
    $table->foreignId('publisher_id')->constrained()->onDelete('cascade');
    $table->timestamps();
 });
 }
