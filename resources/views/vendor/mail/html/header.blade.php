<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://www.vimbiso.org/images/logo-no-bg-2.png" class="logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
