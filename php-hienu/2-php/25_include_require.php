<?php

/**
 * Câu lệnh include, include_once, require, require_once
 * -> 4 câu lệnh trên dùng để nhúng file trong PHP
 *
 * 1. include: nhúng file(nhúng được nhiều lần)
 * - gặp lỗi -> include tiếp tục chạy
 *
 * 2. include_once: nhúng file(chỉ 1 lần)
 * - gặp lỗi -> include_once tiếp tục chạy
 *
 * 3. require: nhúng file(nhúng nhiều lần)
 * - gặp lỗi -> dừng chương trình
 *
 * 4. require_once: nhúng file(nhúng 1 lần)
 * - gặp lỗi -> dừng chương trình
 */
include "./25_support.php";