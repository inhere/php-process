# process

php 的进程创建、停止、信号等管理工具的实现

## 进程间通信

IPC: Inter-process communication

通常linux中的进程通信方式有：

- 消息队列 - (Message Queue)
- 信号量 - (Semaphore)是系统提供的一种原子操作，一个信号量，同时只有一个进程能操作。一个进程获得了某个信号量，就必须被该进程释放掉。
- 共享内存 - (Shared Memory)是系统在内存中开辟的一块公共的内存区域，任何一个进程都可以访问，在同一时刻，可以有多个进程访问该区域，为了保证数据的一致性，需要对该内存区域加锁或信号量。
- 信号 - (Signal)
- 管道 - (Named Pipe)
- 套接字 - (sockets)

### php进程间通信

php中的进程是以扩展的形式来完成。通过这些扩展，我们能够很轻松的完成进程的一系列动作。

- pcntl扩展：主要的进程扩展，完成进程创建于等待操作。
- posix扩展：完成posix兼容机通用api,如获取进程id,杀死进程等。
- sysvmsg扩展：实现system v方式的进程间通信之消息队列。
- sysvsem扩展：实现system v方式的信号量。
- sysvshm扩展：实现system v方式的共享内存。
- sockets扩展：实现socket通信。

> 这些扩展只能在linux/mac中使用，window下是不支持。

## 项目地址

- **gitee** https://gitee.com/inhere/php-process.git
- **github** https://github.com/inhere/php-process.git

**注意：**

- master 分支是要求 `php >= 7` 的

## 安装

- composer command

```bash
compsoer require inhere/process
```

- 使用 composer

编辑 `composer.json`，在 `require` 添加

```
"inhere/process": "*"
```

然后执行: `composer update`

- 直接拉取

```
git clone https://gitee.com/inhere/php-process.git // gitee
git clone https://github.com/inhere/php-process.git // github
```

## More

- [symfony/process](https://github.com/symfony/process)

## License

MIT
