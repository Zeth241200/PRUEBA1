@props(['type' => 'info'])
@php
    switch ($type) {
        case 'info':
            
        $class = 'text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';

            break;

        case 'danger':
        $class = 'text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;

        case 'success':
        $class = 'text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;

        case 'warning':
        $class = 'text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
            break;
        
        case 'dark':
        $class = 'text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
            break;
            default:
            $class = 'text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';

            break;
    }
@endphp

<div   {{$attributes ->merge(['class' => 'p-4  text-sm' . $class]) }} role="alert">
    <span class="font-medium">{{$title ?? 'Info Alert'}}</span> {{$slot}}
    
   
  </div>