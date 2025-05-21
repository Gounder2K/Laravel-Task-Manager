use App\Models\Task;
use Illuminate\Http\Request;

Route::get('/tasks', function () {
    return Task::all();
});
