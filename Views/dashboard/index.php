<?php
if (!isset($_SESSION['role_user']) || $_SESSION['role_user'] !== 1) {
  echo "403 - Access Forbidden";
  exit;
}
?>

<?php include_once 'layouts/_header.php'; ?>

<div class="container mx-auto">
  <div class="flex m-6 space-x-1  border-b border-gray-600">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
      style="fill: rgba(127, 127, 127, 1);transform: ;msFilter:;">
      <path
        d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
      </path>
    </svg>
    <ol>
      <li class="py-1">Home /
        <?= $page ?>
      </li>
    </ol>
  </div>
</div>

<!--
  <section class="px-24 mt-6">
  <div>
    <h3>Dashboard</h3>
  </div>
  <div class="bg-white border-2 p-5 box-border">
    <h4>
      Selamat datang <b>
      <?= $_SESSION['username'] ?>
      </b> di Ba_Vapor
    </h4>
  </div>
</section>
 -->
<!-- ini bagian toast notifikasi -->
<?php
$pageMapping = [
  'produk' => 'components/produk.php',
  'kategori' => 'components/kategori.php',
  'user' => 'components/user.php',
  'dashboard' => 'components/dashboard.php',
];

// Check if 'page' parameter is set and its value exists in the mapping array
if (isset($page) && isset($pageMapping[$page])) {
  include_once $pageMapping[$page];
} else {
  echo '<h3>404 : Halaman Tidak Ditemukan</h3>';
}

?>
<?php include 'layouts/_footer.php'; ?>