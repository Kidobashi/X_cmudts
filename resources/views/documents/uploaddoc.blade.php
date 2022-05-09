<form method="POST" action="dashboard">
    @method('PUT')
    @csrf
    <!-- Name -->
        <div>
            <x-label for="sender_name" :value="__('Sender')" />
            <x-input id="sender_name" class="block mt-1 w-full" type="text" name="sender_name" :value="old('sender_name')" required autofocus />
        </div>

        <div>
            <x-label for="receiver_name" :value="__('Receiver')" />
            <x-input id="receiver_name" class="block mt-1 w-full" type="text" name="receiver_name" :value="old('receiver_name')" required autofocus />
        </div>
        
        <div>
        <x-label for="from_office" :value="__('From Office')" />
            <select id="from_office" name="from_office" class="block mt-1 w-full">
                <option value="old(from_office)" selected disabled>Select Office
                    @foreach ($officeName as $row)
                    <option value="{{ $row->id }}">{{ $row->officeName }}</option>
                </option>
                @endforeach
            </select>
        </div>
        
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "mortarmax";
            $dbname = "cmudts";
            $conn = new mysqli($servername, $username, $password, $dbname);

            $result = mysqli_query($conn, "SELECT MAX(id) FROM documents");
            $row = mysqli_fetch_array($result);

            $lastID = strval($row[0]);
            $number = sprintf('%04d', $lastID);
            $stringVal = strval($number);
            $year = strval(strftime("%Y"));
            $refNo = "$year$stringVal";

            echo $refNo;
            echo "<br>";
        ?>

        <!--<img src="{!! route('makeQrCode',['$text'=>'Hello World']) !!}" alt="QR Code">-->(QR CODE GENERATION PROBLEM)************

        <div>
            <x-label for="to_office" :value="__('To Office')" />
                <select id = "to_office" name="to_office" class="block mt-1 w-full">
                <option value="old(to_office)" selected disabled>Select Office
                    @foreach ($officeName as $row)
                    <option value="{{ $row->id }}">{{ $row->officeName }}</option>
                </option>
                @endforeach
            </select>
        </div>

        <x-button class="ml-4">
            Add Document
        </x-button>
</form>

