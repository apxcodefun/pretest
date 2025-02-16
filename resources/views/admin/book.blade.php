<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center h-screen items-center flex-col">
        <h1 class="font-bold text-2xl mb-4">List Buku Inputan User</h1>
        <input type="text" id="color" placeholder="Change Background Color">
        <button id="change">Change</button>
        <table class="border-collapse border border-gray-500">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-500 px-4 py-2">No</th>
                    <th class="border border-gray-500 px-4 py-2">Judul</th>
                    <th class="border border-gray-500 px-4 py-2">Penulis</th>
                    <th class="border border-gray-500 px-4 py-2">Penerbit</th>
                    <th class="border border-gray-500 px-4 py-2">Tahun Terbit</th>
                    <th class="border border-gray-500 px-4 py-2">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $index=>$books)
                <tr>
                    <td class="border border-gray-500 px-4 py-2 text-center">{{$index + 1}}</td>
                    <td class="border border-gray-500 px-4 py-2 text-center">{{$books->judul}}</td>
                    <td class="border border-gray-500 px-4 py-2 text-center">{{$books->penulis}}</td>
                    <td class="border border-gray-500 px-4 py-2 text-center">{{$books->penerbit}}</td>
                    <td class="border border-gray-500 px-4 py-2 text-center">{{$books->tahun_terbit}}</td>
                    <td class="border border-gray-500 px-4 py-2 text-center">{{$books->deskripsi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script>
    document.getElementById('change').addEventListener('click', function() {
        let warna = document.getElementById('color').value;
        document.body.style.backgroundColor = warna;

        // Cek apakah warna yang dipilih adalah hitam
        if (warna.toLowerCase() === "black" || warna.toLowerCase() === "#000000") {
            document.body.style.color = "white"; // Ubah teks jadi putih
        } else {
            document.body.style.color = "black"; // Balikin ke hitam kalau bukan hitam
        }

    })
</script>

</html>