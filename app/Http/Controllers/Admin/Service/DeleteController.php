<?php

namespace App\Http\Controllers\Admin\Service;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Service $service)
    {
        // Удаление файла, если есть
        if ($service->image && file_exists(storage_path('app/public/services/' . $service->image))) {
            unlink(storage_path('app/public/services/' . $service->image));
        }

        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'Услуга успешно удалена');

    }
}
