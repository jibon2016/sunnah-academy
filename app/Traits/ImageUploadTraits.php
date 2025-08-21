<?php

namespace App\Traits;

use App\Models\Attachment;
use Ramsey\Uuid\Uuid;

trait ImageUploadTraits
{
    public function imageUpload($request, $imagePath, $modelName)
    {
        if ($request->file('attachments')) {
            $counter = 0;
            foreach ($request->file('attachments') as $key => $attachmentFile) {
                $filename = Uuid::uuid1()->toString() . $modelName->id . '-' . $key . '.' . $attachmentFile->extension();

                $destinationPath = $imagePath;
                $attachmentFile->move(public_path($destinationPath), $filename);
                $path = $imagePath. '/' . $filename;

                $attachment = new Attachment([
                    'user_id' => auth()->id(),
                    'file' => $path,
                    'sort' => $request->attachment_sort[$counter],
                ]);
                $modelName->attachments()->save($attachment);

                $counter++;
            }
        }
        return $modelName;
    }
}
