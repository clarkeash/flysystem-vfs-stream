# flysystem-vfs-stream

# Usage

````php
VfsStream::setup('foo', null, [
  'foo.txt' => 'foobar'
]);

$adapter = new \Clarkeash\Vfs\Adapter(VfsStream::url('foo'));
$file = new \League\Flysystem\Filesystem($adapter);
````
