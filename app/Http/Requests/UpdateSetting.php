<?php

namespace App\Http\Requests;

use App\Enums\LinkButtonStyle;
use App\Enums\LinkTarget;
use App\Rules\Color;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSetting extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                           => 'required|string|max:255',
            'room_limit'                     => 'required|numeric|min:-1|max:100',
            'logo'                           => 'required_without:logo_file|string|max:255',
            'logo_file'                      => 'required_without:logo|image|max:500', // 500 KB, larger files are bad for loading times
            'favicon'                        => 'required_without:favicon_file|string|max:255',
            'favicon_file'                   => 'required_without:favicon|mimes:ico|max:500', // 500 KB, larger files are bad for loading times
            'own_rooms_pagination_page_size' => 'required|numeric|min:1|max:25',
            'pagination_page_size'           => 'required|numeric|min:1|max:100',
            'banner'                         => 'required|array',
            'password_self_reset_enabled'    => 'required|boolean',
            'default_timezone'               => ['required', 'string', Rule::in(timezone_identifiers_list())],
            'banner.enabled'                 => 'required|boolean',
            'banner.title'                   => 'nullable|string|max:255',
            'banner.message'                 => ['nullable', Rule::requiredIf(is_array($this->banner) && $this->boolean('banner.enabled')), 'string', 'max:500'],
            'banner.link'                    => 'nullable|string|url|max:255',
            'banner.link_text'               => 'nullable|string|max:255',
            'banner.link_style'              => ['nullable', Rule::requiredIf(is_array($this->banner) && $this->filled('banner.link')), 'string', 'max:255', new EnumValue(LinkButtonStyle::class)],
            'banner.link_target'             => ['nullable', Rule::requiredIf(is_array($this->banner) && $this->filled('banner.link')), 'string', 'max:255', new EnumValue(LinkTarget::class)],
            'banner.icon'                    => 'nullable|string|max:255|regex:/^fa[srldb] fa\\-([a-z0-9]+(?(?=\\-)\\-[a-z0-9]+)*)$/',
            'banner.color'                   => ['nullable', Rule::requiredIf(is_array($this->banner) && $this->boolean('banner.enabled')), 'string', new Color()],
            'banner.background'              => ['nullable', Rule::requiredIf(is_array($this->banner) && $this->boolean('banner.enabled')), 'string', new Color()]
        ];
    }
}
