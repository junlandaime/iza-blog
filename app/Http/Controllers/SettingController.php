<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'site_name' => config('app.name'),
            'max_match_requests' => config('taaruf.max_match_requests'),
            'approval_required' => config('taaruf.approval_required'),
            'min_age' => config('taaruf.min_age'),
            'max_age' => config('taaruf.max_age'),
        ];

        return view('admin.setting', compact('settings'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => 'required|string|max:255',
            'max_match_requests' => 'required|integer|min:1',
            'approval_required' => 'required|boolean',
            'min_age' => 'required|integer|min:18',
            'max_age' => 'required|integer|gt:min_age',
        ]);

        // Update the settings
        Config::set('app.name', $validatedData['site_name']);
        Config::set('taaruf.max_match_requests', $validatedData['max_match_requests']);
        Config::set('taaruf.approval_required', $validatedData['approval_required']);
        Config::set('taaruf.min_age', $validatedData['min_age']);
        Config::set('taaruf.max_age', $validatedData['max_age']);

        // Save the settings to the configuration file
        $this->updateConfigFile($validatedData);

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }

    private function updateConfigFile($settings)
    {
        $path = config_path('taaruf.php');
        $content = "<?php\n\nreturn " . var_export($settings, true) . ";\n";
        file_put_contents($path, $content);
    }
}
