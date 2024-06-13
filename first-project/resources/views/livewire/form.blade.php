<div>
    <br>
    <select wire:model.live="companyid" class="bg-gray-50 bordat-gray-300 text-gray-900 text-sm rounded-lg">
        <option value="">Select Company</option>
        @foreach ($this->companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach

    </select>
    <select wire:model.live="phoneid" class="bg-gray-50 bordat-gray-300 text-gray-900 text-sm rounded-lg">
        <option value="">Select Phone</option>
        @foreach ($this->phones as $phone)
            <option value="{{ $phone->id }}">{{ $phone->name }}</option>
        @endforeach

    </select>
    <img src="https://www.chaloindia.gov.in/images/register-bg.svg" alt="Register Background">




</div>
