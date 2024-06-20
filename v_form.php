<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            color: white;
            text-align: center;
            margin: 20px 0; /* Added margin to prevent sticking to header/footer */
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .form-container input[type="submit"] {
            background-color: #7f8097;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .form-container input[type="submit"]:hover {
            background-color: #6e6f8a;
        }
    </style>
</head>
<body>
<center>
    <div class="form-container">
        <?php echo validation_errors('<div style="color: red; margin-bottom: 10px;">', '</div>'); ?>
        <?php echo form_open('ppdb/admin'); ?>
        
        <label>Nama</label>
        <input type="text" name="nama" value="<?= set_value('nama'); ?>">
        
        <label>Email</label>
        <input type="text" name="email" value="<?= set_value('email'); ?>">
        
        <label>Password</label>
        <input type="password" name="password" value="<?= set_value('password'); ?>">
        
        <input type="submit" value="Simpan">
        
        <?php echo form_close(); ?>
    </div>
</center>
</body>
</html>
