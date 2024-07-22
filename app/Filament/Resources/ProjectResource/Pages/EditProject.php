<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     // Assuming $data['project_images'] contains the uploaded files
    //     $fileNames = [];
    //     if (isset($data['project_image'])) {
    //         foreach ($data['project_image'] as $file) {
    //             if (is_string($file)) {
    //                 // Existing file, add as is
    //                 $fileNames[] = $file;
    //             } else {
    //                 // New file, store and add to array
    //                 $fileNames[] = $file->store('uploads');
    //             }
    //         }
    //         $data['project_image'] = json_encode($fileNames);
    //     }

    //     return $data;
    // }

    // protected function mutateFormDataAfterLoad(array $data): array
    // {
    //     // Ensure the existing images are decoded properly for the FileUpload component
    //     if (isset($data['project_image']) && is_string($data['project_image'])) {
    //         $data['project_image'] = json_decode($data['project_image'], true);
    //     }

    //     return $data;
    // }


}
