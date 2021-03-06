@extends('master')

@section('styles')
@parent
<style>
    .disable-links {
        pointer-events: none;
    }

</style>
@endsection

@section('content')
@parent

@include('common.list-table-modal')
<div class="row">
    <div class="col-md-12">

        <div class="card card-outline card-primary">
            <div class="card-header">
                <div class="card-title form-inline my-0">
                    <a href="filas">Filas</a> <i class="fas fa-angle-right mx-2"></i> ({{ $fila->setor->sigla }}) {{ $fila->nome }} |

                    <span class="ml-2 {{ $fila->estado == 'Desativada' ? 'disable-links': '' }}">
                        @include('common.list-table-btn-edit', ['row'=>$fila])
                    </span>
                    &nbsp; | &nbsp;
                    <span class="">
                        @include('filas.partials.enable-disable-btn')
                    </span>
                </div>
            </div>

            <div class="card-body {{ $fila->estado == 'Desativada' ? 'disable-links': '' }}">
                <div class="row">
                    <div class="col-md-7">
                        @include('filas.partials.principal')
                    </div>
                    <div class="col-md-5">
                        @include('filas.partials.pessoas')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
