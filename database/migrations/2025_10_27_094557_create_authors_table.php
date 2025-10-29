     public function up(): void
     {
         if (!Schema::hasTable('authors')) {
             Schema::create('authors', function (Blueprint $table) {
                 // Kode tabel di sini
             });
         }
     }
     