<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ประวัตินักศึกษา</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-primary-subtle">

<div class="container mt-5">

    <div class="card shadow-lg rounded-4">

        <div class="card-body text-center">

            <img src="https://i.pravatar.cc/180"
                class="rounded-circle border border-4 border-primary mb-3">

            <h2 class="text-primary">
                🎓 ประวัตินักศึกษา
            </h2>

            <table class="table table-bordered mt-4">

                <tr>
                    <th>รหัสนักศึกษา</th>
                    <td>{{ $id }}</td>
                </tr>

                <tr>
                    <th>ชื่อ-สกุล</th>
                    <td>น.ส.ณัฐกฤตา กิ่งชัยภูมิ</td>
                </tr>

                <tr>
                    <th>สาขา</th>
                    <td>ระบบสารสนเทศ</td>
                </tr>

                <tr>
                    <th>คณะ</th>
                    <td>บริหารธุรกิจ</td>
                </tr>

            </table>

            <a href="/" class="btn btn-primary">
                กลับหน้าแรก
            </a>

        </div>

    </div>

</div>

</body>
</html>