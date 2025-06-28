class TestDbCommand extends CConsoleCommand
{
    public function run($args)
    {
        try {
            $connection = Yii::app()->db;
            $connection->active = true;
            echo "Koneksi database berhasil!\n";
        } catch (Exception $e) {
            echo "Gagal terkoneksi: " . $e->getMessage() . "\n";
        }
    }
}