// channel-filter.pipe.ts
import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'search'
})
export class ChannelFilterPipe implements PipeTransform {
  transform(items: any[], searchTerm: string): any[] {
    if (!items || !searchTerm) {
      return items;
    }

    return items.filter(item => item.nombre_canal.toLowerCase().includes(searchTerm.toLowerCase()));
  }
}
