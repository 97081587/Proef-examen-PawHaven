<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminKlantenDeleteControllerAPI extends Controller
{
        // alle data wordt geanonimiseerd
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'first_name' => 'deleted_user',
            'last_name' => 'deleted_user',
            'phone_number' => 'deleted_user',
            'email' => 'deleted_' . $user->id . '@anon.local', // unique email to prevent conflicts
            'customer_number' => 'anon_' . $user->id,
            // 'password' => bcrypt($user->password), // optional, already hashed
        ]);

        return response()->json([
            'message' => 'Account geanonimiseerd'
        ], 200);
    }
}
