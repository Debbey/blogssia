<a href="{{ route('home') }}" > Back </a>

<div> 
    <h1>Create Info</h1>
        <form action="{{ route('saved') }}" method="post">
            @csrf
        <div>
            <label>First name: </label>
            <input type="text" name="firstN" reqired>
        </div>

        <div>
            <label>Last name: </label>
            <input type="text" name="lastN" reqired>
        </div>

        <div>
            <label>Gender: </label>
            <label>Male
            <input type="radio" name="gender" value="male" reqired></label>
            <label>Female
            <input type="radio" name="gender" value="female" reqired></label>
        </div>

        <div>
            <label>Language: </label>
            <label>English
            <input type="radio" name="language" value="english" reqired></label>
            <label>Tagalog
            <input type="radio" name="language" value="tagalog" reqired></label>
            <label>Bisaya
            <input type="radio" name="language" value="bisaya" reqired></label>
        </div>

        <div>
            <label>Email: </label>
            <input type="email" name="email" reqired>
        </div>

        <div>
            <label>Address: </label>
            <input type="text" name="address" reqired>
        </div>

        <div>
            <label>State:
    <select name="state">
    <option value="philippines" selected>Philippines</option>
    <option value="southkorea">South korea</option>
    <option value="japan">Japan</option>
    </select>
            </label>
        </div>

        <div>
            <label>ZIP: </label>
            <input type="number" name="zip" reqired>
        </div>

        <div>
            <label>Credit Card Type:
    <select name="cardtype">
    <option value="gcash" selected>Gcash Card</option>
    <option value="visa">Visa</option>
    <option value="bdo">BDO card</option>
    </select>
            </label>
        </div>
        
            <button type="submit" class="btn btn-primary"> Submit </button>
</form>
</div>